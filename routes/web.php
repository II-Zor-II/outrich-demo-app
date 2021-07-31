<?php

use App\Http\Controllers\Front\AddEmployeeController;
use App\Http\Controllers\Front\IndexController;
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

Route::get('/', [IndexController::class, 'show']);
Route::get('/create-employee', [AddEmployeeController::class, 'show']);
Route::post('/create-employee', [AddEmployeeController::class, 'create']);
Route::put('/update-employee', [AddEmployeeController::class, 'update']);
// generic error page
Route::get('/error', [IndexController::class, 'error']);
