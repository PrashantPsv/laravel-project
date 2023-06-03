<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\stateController;




Route::get('/', function () {
    return view('login');
});
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/uploadfile', 'UploadfileController@index');
Route::post('/uploadfile', 'UploadfileController@upload');
Route::get('/main', 'MainController@index');
// Route::post('/main/checklogin', 'MainController@checklogin');
Route::post('/main/checklogin', [MainController::class, 'checklogin']);
Route::get('main/successlogin', [MainController::class, 'successlogin'])->name('main.successlogin');
Route::get('state/index', [stateController::class, 'index'])->name('state.index');
Route::post('state/store', [stateController::class, 'store'])->name("state.store");
Route::get('/state/{id}/edit', [StateController::class, 'edit'])->name('state.edit');
Route::post('/state/Update', [StateController::class, 'Update'])->name('state.Update');
Route::get('main/logout', 'MainController@logout');
