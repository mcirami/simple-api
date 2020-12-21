<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\JsonResponse;

class BaseController extends Controller
{
    /**
     * success response method.
     *
     * @return JsonResponse
     *
     * @var $result
     * @var $message
     */
    public function sendResponse($result, $message) {
        $response = [
            'success'   => true,
            'data'      => $result,
            'message'   => $message,
        ];

        return response()->json($response, 200);
    }

    /**
     * return error response.
     *
     * @return JsonResponse
     *
     * @var $error
     * @var $errorMessage
     * @var $code
     */
    public function sendError($error, $errorMessages = [], $code = 404) {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if(!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }
}
