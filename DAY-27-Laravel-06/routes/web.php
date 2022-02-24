<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BlogController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [StudentController::class, 'index'])->name('home');
Route::post('/new-student', [StudentController::class, 'create'])->name('new-student');
Route::get('/manage-student', [studentController::class, 'manage'])->name('manage-student');
Route::get('/edit-student/{id}', [studentController::class, 'edit'])->name('edit-student');
Route::post('/update-student/{id}', [studentController::class, 'update'])->name('update-student');
Route::get('/delete-student/{id}', [studentController::class, 'delete'])->name('delete-student');
Route::get('/manage-blog/{id}', [BlogController::class, 'edit'])->name('manage-blog');


Route::get('/manage-blog', [BlogController::class, 'manage'])->name('manage-blog');
Route::post('/add-blog', [BlogController::class, 'create'])->name('add-blog');
Route::get('/add-blog', [BlogController::class, 'index'])->name('add-blog');
