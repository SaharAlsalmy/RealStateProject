<?php

use App\Http\Controllers\Api\OwnersController;
use App\Http\Controllers\OwenersController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//  Route::apiResource('oweners',OwnersController::class);


//  Route::group(['middleware' => ['changeLanguage', 'checkPassword']], function () {

//     Route::post('register',AuthController::class);

//     Route::post('login',AuthController::class);

//     Route::post('password/email', AuthController::class)->name('password.sent');

//     Route::post('password/reset', AuthController::class)->name('password.reset');

//     Route::post('email/verification-notification', AuthController::class);

//     Route::post('verify-email/{id}/{hash}', AuthController::class)->name('verification.verify');
// });
