<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\CheckingAccount;

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

Route::get('/', [NavigationController::class, 'index'])->name('nav.index');
