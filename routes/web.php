<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\OwnerController;
use App\Models\Owner;
use App\Models\RealState;

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
    Route::resource('owners',OwnerController::class);

    // Route::resource('owners',[OwnerController::class,'index']);
    });



// Route::get('owners',function(){
//     return view('layouts.owener.index');
// });





/** test Relations  */

// Route::get('users/{id}', function ($id) {

//     $owener=Owner::findOrFail($id);
    //dd($owener->owenerDetails[0]->office_address);

    // foreach ($owener as $owner) {
    //     # code...
    //     echo $owner->realState->name_ar;
    // }

//     // dd($owener->realState[0]->name_ar);
//     $realState=RealState::findOrFail($id);
//     dd($realState->property);

// });

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
