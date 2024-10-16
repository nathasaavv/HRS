<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;


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
Route::get('/data', [DataController::class, 'index'])->name('employee.index');
Route::get('/employee/create', [DataController::class, 'create'])->name('employee.create');
Route::post('/employee/store', [DataController::class, 'store'])->name('employee.store');
Route::get('/employee/{id}/edit', [DataController::class, 'edit'])->name('employee.edit');
Route::put('/employee/{id}', [DataController::class, 'update'])->name('employee.update');
Route::patch('/employee/{id}/archive', [DataController::class, 'archive'])->name('employee.archived');
Route::get('/employee/archived', [DataController::class, 'archived'])->name('employee.archived.list');
Route::get('/employee/{id}', [DataController::class, 'show'])->name('employee.show');
Route::patch('/employee/unarchive/{id}', [DataController::class, 'unarchive'])->name('employee.unarchive');

Route::get('/employee', [DataController::class, 'index'])->name('employee.index');


Route::resource('records', RecordController::class);
Route::get('record', [RecordController::class, 'index'])->name('records.index');
Route::get('/records', [RecordController::class, 'index'])->name('records.index');

Route::get('/data', [DataController::class, 'index'])->name('employee.index');

Route::get('/pelanggaran', [RecordController::class, 'index'])->name('pelanggaran');

Route::controller(DataController::class)->prefix('karyawan')->group(function () {
    Route::get('','index')->name('karyawan');
});
Route::delete('/employee/{id}/delete', [DataController::class, 'destroy'])->name('employee.delete');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');




Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/check', [LoginController::class, 'check'])->name('check');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/manager/dashboard', function () {
        return 'Manager Dashboard';
    })->name('manager.dashboard')->middleware('can:isManager');

    Route::get('/admin/dashboard', function () {
        return 'Admin Dashboard';
    })->name('admin.dashboard')->middleware('can:isAdmin');

    Route::get('/user/dashboard', function () {
        return 'User Dashboard';
    })->name('user.dashboard')->middleware('can:isUser');
});

