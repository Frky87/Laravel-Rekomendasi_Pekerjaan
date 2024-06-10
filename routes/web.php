<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobsController;
use App\Models\Jobs;
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

//Untuk Tabel Employee
Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee/create', [EmployeeController::class, 'create']);
Route::post('/employee/store', [EmployeeController::class, 'store']);
Route::get('/employee/edit/{id_employees}', [EmployeeController::class, 'edit']);
Route::put('/employee/update/{id_employees}', [EmployeeController::class, 'update']);
Route::get('/employee/delete/{id_employees}', [EmployeeController::class, 'delete']);
Route::get('/employee/destroy/{id_employees}', [EmployeeController::class, 'destroy']);
Route::get('/employee/pdf', [EmployeeController::class, 'generatePDF'])->name('employee.pdf');

//Untuk Tabel Jobs
Route::get('/jobs', [JobsController::class, 'index']);
Route::get('/jobs/create', [JobsController::class, 'create']);
Route::post('/jobs/store', [JobsController::class, 'store']);
Route::get('/jobs/edit/{id_jobs}', [JobsController::class, 'edit']);
Route::put('/jobs/update/{id_jobs}', [JobsController::class, 'update']);
Route::get('/jobs/delete/{id_jobs}', [JobsController::class, 'delete']);
Route::get('/jobs/destroy/{id_jobs}', [JobsController::class, 'destroy']);
