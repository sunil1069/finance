<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;



Route::get('/', function () {
    return view('welcome');
});


Auth::routes();



Route::get('/home', function () {return view('dashboard');});


Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

Route::get('/users', function () {return view('users.index');});
Route::get('/contracts', function () {return view('contracts.index');});
Route::get('/contracts/create', function () {return view('contracts.create');});
Route::get('/contracts/create2', function () {return view('contracts.create2');});

Route::get('/finance/contract-detail', function () {return view('finance.contract-detail');});
Route::get('/finance/leads', function () {return view('finance.leads');});
Route::get('/finance/settings', function () {return view('finance.settings');});
Route::get('/finance/service-list', function () {return view('finance.service-list');});
Route::get('/finance/payment-proposal', function () {return view('finance.payment-proposal');});









