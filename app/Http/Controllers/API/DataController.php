<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use Carbon\Carbon;
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
    public function getUserData(Request $request): JsonResponse {
        $postedData = $request->all();
        $nowEST = Carbon::now()->timezone('America/New_York');
        $timeStamp = $nowEST->timezone('UTC')->format('Y-m-d H:i:s');
        $validator = Validator::make($postedData, [
            'email'         => 'required|email|max:255',
            'ip'            => 'required|ip|max:255',
            'source_id'     => 'nullable',
            'tracking_id'   => 'nullable',
            'time_stamp'    => $timeStamp,
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $postedData['time_stamp'] = $timeStamp;

        Log::channel( 'api' )->info( " --- posted data --- " . print_r($postedData, true) );

        Data::create($postedData);

        $endpoint = "https://locatemydates.com/tdsApi?tdsId=s4319aed_r&tds_campaign=s4319aed&s1=int&utm_source=int&utm_term=1&affid=7fcce6f8&subid=" . $postedData['source_id'] . "&email=" . $postedData['email'];
        //. "&dob=2000-03-23&ip=" . $postedData['ip'] . "&ua=" . $postedData['browser'] . "&sexual_orientation=hetero&gender=male&apiKey=9cdl4vjs3c815dch6bxpa7yu38oasnigcl7ieiixr0mk2v4muq7798i4by3ka23l"
        $sendData = [
            'apiKey'                => "9cdl4vjs3c815dch6bxpa7yu38oasnigcl7ieiixr0mk2v4muq7798i4by3ka23l",
            'email'                 => $postedData['email'],
            'sexual_orientation'    => 'hetero',
            'gender'                => 'male',
            'dob'                   => '2000-03-23',
            'ip'                    => $postedData['ip'],
            'ua'                    => $postedData['browser']
        ];

        $curl = curl_init();
        curl_setopt_array($curl, array(
           CURLOPT_URL => $endpoint,
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING => "",
           CURLOPT_TIMEOUT => 30000,
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST => "POST",
           CURLOPT_POSTFIELDS => json_encode($sendData),
           CURLOPT_HTTPHEADER => array(
               // Set Here Your Requested Headers
               'Content-Type: application/json',
           )
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            $error = str_replace("locatemydates", "moneylovers", $err);
            $decodedResponse = "cURL Error #:" . $error;
        } else {
            $decodedResponse = json_decode( $response, true );
        }

        Log::channel( 'api' )->info( " --- deResponse --- " . print_r($decodedResponse, true) );

        if(is_array($decodedResponse) && $decodedResponse['status'] == "success") {
            $returnedData = [
                "status" => "success"
            ];
        } else {
            $returnedData = $decodedResponse;
        }

        return response()->json($returnedData);
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
