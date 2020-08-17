<?php

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

Route::get('/','HomeController@index');

Route::get('/test', 'DashboardController@index');

Route::resource('/expense_report','ExpenseReportController');

Route::get('/expense_report/{id}/confirmDelete','ExpenseReportController@confirmDelete');
Route::get('/expense_report/{id}/confirmSendEmail','ExpenseReportController@confirmSendEmail');
Route::post('/expense_report/{id}/sendMail','ExpenseReportController@sendMail');

Route::get('/expense_report/{expense_report}/expense/create','ExpenseController@create');
Route::post('/expense_report/{expense_report}/expense','ExpenseController@store');
