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


Route::get('/', [App\Http\Controllers\SubscriberController::class, 'index'])->name('home');
Route::get('subscriber/seed', [App\Http\Controllers\SubscriberController::class, 'seed'])->name('subscriber.seed');
Route::post('subscriber/dispatch-mail', [App\Http\Controllers\SubscriberController::class, 'dispatchMail'])->name('subscriber.dispatch-mail');