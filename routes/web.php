<?php

use App\Http\Controllers\EmployeeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee/create', [EmployeeController::class, 'create']);
Route::post('/employee/store', [EmployeeController::class, 'store']);
Route::get('/employee/edit/{id_employees}', [EmployeeController::class, 'edit']);
Route::put('/employee/update/{id_employees}', [EmployeeController::class, 'update']);
Route::get('/employee/delete/{id_employees}', [EmployeeController::class, 'delete']);
Route::get('/employee/destroy/{id_employees}', [EmployeeController::class, 'destroy']);

