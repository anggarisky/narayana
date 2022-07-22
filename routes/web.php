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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('overview', [CourseController::class, 'index'])->name('admin.overview');
    Route::get('admin/add/course', [CourseController::class, 'create'])->name('admin.create.course');
    Route::post('admin/add/course/save', [CourseController::class, 'store'])->name('admin.add.course.store');
});