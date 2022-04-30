<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('course',[CourseController::class,'index'])->name('course');

Route::get('courseInsert',[CourseController::class,'courseInsert'])->name('courseInsert');

Route::post('courseInsertPost',[CourseController::class,'courseInsertPost'])
    ->name('courseInsertPost');

Route::get('courseUpdate/{id}',[CourseController::class,'courseUpdate'])->name('courseUpdate');

Route::post('courseUpdatePost/{id}',[CourseController::class,'courseUpdatePost'])->name('courseUpdatePost');

Route::get('courseDelete/{id}',[CourseController::class,'courseDelete'])->name('courseDelete');

