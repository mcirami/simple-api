<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\DataController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::middleware('auth:api')->group( function () {
    Route::get('get-data', [DataController::class, 'index']);

});

Route::group(['middleware' => ['cors', 'json.response', 'api']],
    function() {
        Route::post('register', [RegisterController::class, 'register']);
        Route::post('login', [RegisterController::class, 'login']);
        Route::post('post-data', [DataController::class, 'store']);
        Route::post('post-user-data', [DataController::class, 'getUserData']);
        //Route::resource('data', DataController::class);
    }
);
/*Route::middleware('cors:json.response')->group( function () {
    Route::resource('data', DataController::class);
});*/


