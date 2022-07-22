<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CourseVideoController;

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
    return view('landing');
});
Route::redirect('/', '/landing');
Route::get('landing', [FrontController::class, 'index'])->name('landing');
Route::get('details/{slug}', [FrontController::class, 'details'])->name('details');


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
    Route::get('admin/edit/course/{id}', [CourseController::class, 'edit'])->name('admin.course.edit');
    Route::put('admin/update/course/save/{id}', [CourseController::class, 'update'])->name('admin.course.update');

    Route::get('admin/course/manage/{id}', [CourseVideoController::class, 'manage'])->name('admin.course.manage');
    Route::get('admin/course/manage/create/{id}', [CourseVideoController::class, 'create'])->name('admin.course.manage.create');
    Route::post('admin/course/manage/save', [CourseVideoController::class, 'store'])->name('admin.course.manage.store');
    Route::get('admin/course/manage/edit/{id}', [CourseVideoController::class, 'show'])->name('admin.course.manage.edit');
    Route::put('admin/update/manage/update/{id}', [CourseVideoController::class, 'update'])->name('admin.course.manage.update');

});