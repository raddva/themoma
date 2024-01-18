<?php

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

Route::view('/', 'pages.dashboard')->name('home');
Route::view('/login', 'pages.login')->name('login');
Route::view('/expenses', 'pages.expenses')->name('expenses');
Route::view('/incomes', 'pages.incomes')->name('incomes');
Route::view('/reports', 'pages.reports')->name('reports');
Route::view('/categories', 'pages.categories')->name('categories');
