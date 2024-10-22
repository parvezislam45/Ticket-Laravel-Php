<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Content\BuyTicket;
use App\Livewire\Content\Customer;
use App\Livewire\Dashboard\Admin;
use App\Livewire\Dashboard\User;
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
})->name('home');;
Route::get('/login',Login::class)->name('login');
Route::get('/register',Register::class)->name('register');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/customer',Customer::class)->name('customer');
    Route::get('/buy', BuyTicket::class)->name('buy')->middleware('auth');
    Route::get('/user', User::class)->name('user');
    Route::get('/admin', Admin::class)->name('admin')->middleware('admin');
});

