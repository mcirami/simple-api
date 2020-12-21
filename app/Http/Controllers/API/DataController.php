<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Data;
use App\Http\Resources\Data as DataResource;
use Illuminate\Http\JsonResponse;

class DataController extends BaseController
{
    /**
     * Display a listing of resource.
     *
     * @return JsonResponse
     */
    public function index() {
        $data = Data::all();

        //return $this->sendResponse(DataResource::collection($data), 'Data retrieved successfully');
        return $this->sendResponse($data, 'Data retrieved successfully');
    }

    /**
     * Store newly created resource
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request) {
        $input = $request->all();

        $validator = Validator::make($input, [
            'ip' => 'required|ip|max:255',
            'email' => 'required|email|max:255',
            'source_id' => 'nullable',
            'tracking_id' => 'nullable',
            'time_stamp' => 'nullable',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $data = Data::create($input);

        return $this->sendResponse($data, 'Data created successfully');

        //return $this->sendResponse(new DataResource($data), 'Data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return JsonResponse
     */
    public function show($id) {
        $data = Data::find($id);

        if(is_null($data)) {
            return $this->sendError([], 'Data not found');
        }

        return $this->sendResponse(new DataResource($data), 'Product retrieved successfully');
    }

    /**
     * Updated the specified resource in storage.
     *
     * @param Request $request
     * @param Data $data
     * @return JsonResponse
     */
    public function update(Request $request, Data $data) {
        $input = $request->all();

        $validator = Validator::make($input, [
            'ip' => 'required|ip|max:255',
            'email' => 'required|email|max:255',
            'source_id' => 'nullable',
            'tracking_id' => 'nullable',
            'time_stamp' => 'nullable',
        ]);

        if($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $data->email = $input['email'];
        $data->ip = $input['ip'];
        $data->source_id = $input['source_id'];
        $data->tracking_id = $input['tracking_id'];
        $data->time_stamp = $input['time_stamp'];

        $data->save();

        return $this->sendResponse(new DataResource($data), 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage
     *
     * @param Data $data
     * @return JsonResponse
     */
    public function destroy(Data $data) {
        $data->delete();

        return $this->sendResponse([], 'Product deleted successfully');
    }
}
