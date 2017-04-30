<?php

use Illuminate\Http\Request;

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

Route::group(['middleware' => ['Cors']], function () {
    Route::get('teste1', function () {
        $user = new \App\User();
        $user->name = 'teste';
        return $user->toJson();
    });
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
