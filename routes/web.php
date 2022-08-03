<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OwnerController;
use App\Models\Owner;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('/dashbord/admin')->group(function () {

    Route::resource('oweners', OwnerController::class);


    });

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth'])->name('dashboard');

    //require __DIR__.'/auth.php';

/** test Relations  */

Route::get('users/{id}', function ($id) {

    $owener=Owner::findOrFail($id);
    dd($owener->owenerDetails[0]->office_address);

});
