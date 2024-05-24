<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix('admin')->middleware('auth:sanctum')->name('admin.')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('/upload-file', [DocumentController::class, 'create'])->name('upload-file');
    Route::get('/department', [DepartmentController::class, 'index'])->name('departments');
    Route::post('/department', [DepartmentController::class, 'store'])->name('department.store');
    
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');

    Route::get('/department-users', function () {
        return view('admin.layouts.pages.department-users');
    })->name('department-users');
    Route::get('/files', [DocumentController::class, 'index'])->name('files');
    Route::post('/files', [DocumentController::class, 'store'])->name('files.store');
    Route::get('/settings', function () {
        return view('admin.layouts.pages.settings');
    })->name('settings');
    Route::get('/department-report', [DepartmentController::class, 'get_department_files'])->name('department-report');
    Route::get('/status-report', function () {
        return view('admin.layouts.pages.status-report');
    })->name('status-report');
});
Route::get('/', [AuthController::class, 'create'])->name('auth.login');
Route::post('/', [AuthController::class, 'loginUser'])->name('auth.store');
Route::delete('/', [AuthController::class, 'logout'])->name('auth.logout');