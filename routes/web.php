<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {return view('tampil.dashboard');});
Route::get('/dashboard', [Controller::class, 'view']);
Route::get('/create', [Controller::class, 'create']);
Route::get('/dashboard2', [Controller::class, 'index'])->name('dashboard2');//untuk search run

Route::get('/view', [Controller::class, 'viewdata']);
Route::get('/view/{id}', [Controller::class, 'viewdata'])->name('view');


Route::get('/update/{id}', [Controller::class, 'updateview'])->name('update');//nampilin daata
Route::post('/update/{id}', [Controller::class, 'update'])->name('updatepro'); //proses update


Route::post('/simpandata', [Controller::class, 'simpandata']);// untuk mengirimkan data ke db 

Route::get('/delete/{id}', [Controller::class, 'delete'])->name('delete');//untuk delete data


Route::resource('user', Controller::class);

