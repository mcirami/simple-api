<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
    public function index(): JsonResponse {
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
    public function store(Request $request): JsonResponse {
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
    public function update(Request $request, Data $data): JsonResponse {
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
     * @throws GuzzleException
     */
    public function getUserData(Request $request) {
        $postedData = $request->all();

        $validator = Validator::make($postedData, [
            'email'         => 'required|email|max:255',
            'ip'            => 'required|ip|max:255',
            'source_id'     => 'william',
            'tracking_id'   => 'nullable',
            'time_stamp'    => 'nullable',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $data = Data::create($postedData);

        /*$endpoint = "https://datingempire.club/tdsApi?tdsId={campaign_in}_r&tds_campaign={campaign_in}&affid=7fcce6f8";
        $client = new Client();
        $response = $client->request('POST', $endpoint, ['query' => [
            'email'                 => $postedData['email'],
            'dob'                   => '2000-03-23',
            'ip'                    => $postedData['ip'],
            'ua'                    => $postedData['browser'],
            'utm_source'            => 'will be hard coded',
            'sexual_orientation'    => 'hetero',
            'gender'                => "male",
            'apiKey'                => "9cdl4vjs3c815dch6bxpa7yu38oasnigcl7ieiixr0mk2v4muq7798i4by3ka23l"
        ]]);*/
        Log::channel( 'api' )->info( " --- apiResponse --- " . print_r($data, true) );

        return $this->sendResponse($data, 'Data created successfully');
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
