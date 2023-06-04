<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\stateController;
use App\Http\Controllers\cityController;
use App\Http\Controllers\areacontroller;




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
Route::post('/state/{id}/Update', [StateController::class, 'Update'])->name('state.Update');
Route::get('/state/{id}/delete', [StateController::class, 'delete'])->name('state.delete');
// City
Route::get('city/index', [cityController::class, 'index'])->name('city.index');
Route::post('city/store', [cityController::class, 'store'])->name("city.store");
Route::get('/city/{id}/edit', [cityController::class, 'edit'])->name('city.edit');
Route::post('/city/{id}/Update', [cityController::class, 'Update'])->name('city.Update');
Route::get('/city/{id}/delete', [cityController::class, 'delete'])->name('city.delete');

//Area
Route::get('area/index', [areacontroller::class, 'index'])->name('area.index');
Route::post('area/store', [areacontroller::class, 'store'])->name("area.store");
Route::get('/area/{id}/edit', [areacontroller::class, 'edit'])->name('area.edit');
Route::post('/area/{id}/Update', [areacontroller::class, 'Update'])->name('area.Update');
Route::get('/area/{id}/delete', [areacontroller::class, 'delete'])->name('area.delete');
Route::get('main/logout', 'MainController@logout');
