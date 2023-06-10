<?php

use App\Http\Controllers\AccademyController;
use App\Http\Controllers\areacontroller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\cityController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\stateController;
use App\Http\Controllers\subCategoryController;
use App\Http\Controllers\TeacherC0ntroller;
use Illuminate\Support\Facades\Route;

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

// Teacher
Route::get('Add-Teacher/index', [TeacherC0ntroller::class, 'index'])->name('addTeacher.index');
Route::post('Add-Teacher/store', [TeacherC0ntroller::class, 'store'])->name("addTeacher.store");
Route::get('/Add-Teacher/{id}/edit', [TeacherC0ntroller::class, 'edit'])->name('addTeacher.edit');
Route::post('/Add-Teacher/{id}/Update', [TeacherC0ntroller::class, 'Update'])->name('addTeacher.Update');
Route::get('/Add-Teacher/{id}/delete', [TeacherC0ntroller::class, 'delete'])->name('addTeacher.delete');
Route::get('main/logout', 'MainController@logout');

//Category
Route::get('Category/index', [CategoryController::class, 'index'])->name('Category.index');
Route::post('Category/store', [CategoryController::class, 'store'])->name("Category.store");
Route::get('/Category/{id}/edit', [CategoryController::class, 'edit'])->name('Category.edit');
Route::post('/Category/{id}/Update', [CategoryController::class, 'Update'])->name('Category.Update');
Route::get('/Category/{id}/delete', [CategoryController::class, 'delete'])->name('Category.delete');

//Sub Category
Route::get('subCategory/index', [subCategoryController::class, 'index'])->name('subCategory.index');
Route::post('subCategory/store', [subCategoryController::class, 'store'])->name("subCategory.store");
Route::get('/subCategory/{id}/edit', [subCategoryController::class, 'edit'])->name('subCategory.edit');
Route::post('/subCategory/{id}/Update', [subCategoryController::class, 'Update'])->name('subCategory.Update');
Route::get('/subCategory/{id}/delete', [subCategoryController::class, 'delete'])->name('subCategory.delete');

//Accademy
Route::get('Accademy/index', [AccademyController::class, 'index'])->name('Accademy.index');
Route::post('Accademy/store', [AccademyController::class, 'store'])->name("Accademy.store");
Route::get('/Accademy/{id}/edit', [AccademyController::class, 'edit'])->name('Accademy.edit');
Route::post('/Accademy/{id}/Update', [AccademyController::class, 'Update'])->name('Accademy.Update');
Route::get('/Accademy/{id}/delete', [AccademyController::class, 'delete'])->name('Accademy.delete');
