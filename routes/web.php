<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'index'])->name('main');

Route::resource('users', UserController::class)
    ->only([ "index", 'show', 'store'])
    ->names('users');

Route::get('department/delete/{department}', [DepartmentController::class, 'DepartmentModalAjaxDelete'])->name('department.modal.ajax.delete');
Route::resource('departments', DepartmentController::class)->names('departments');
