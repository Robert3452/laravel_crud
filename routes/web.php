<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpenseReportController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\TaskController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::resource('/expense_reports', ExpenseReportController::class);
Route::resource('/tasks', TaskController::class);
Route::get('/expense_reports/{id}/confirm_delete', [ExpenseReportController::class, 'confirmDelete']);

Route::get('/expense_reports/{expense_report}/expenses/create', [ExpenseController::class, 'create']);
Route::post('/expense_reports/{expense_report}/expenses', [ExpenseController::class, 'store']);

Route::get('/expense_reports/{id}/confirm_send_email', [ExpenseReportController::class, 'sendEmail']);
Route::post('/expense_reports/{id}/send_mail', [ExpenseReportController::class, 'confirmSendEmail']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
