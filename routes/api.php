<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/computers', [Controller::class, 'computers']);

    Route::get('/computers/{computers}', [Controller::class, 'searchcomputers']);

    Route::delete('/computers/{computers}', [Controller::class, 'deletecomputers']);

    Route::post('/computers', [Controller::class, 'savecomputers']);

    Route::put('/computers/{computers}', [Controller::class, 'updatecomputers']);
});
