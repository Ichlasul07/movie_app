<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
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
Route::get('/admin', function () {
    return view('admin.home');
})->name('admin');

Route::get('/admin',[UserController::class,'crud']);

Route::get('/login', function () {
    return view('user.login');
})->name('login');

Route::get('/register', function () {
    return view('user.register');
});

Route::get('/premium', function () {
    return view('user.premium');
});

Route::get('/film', function () {
    return view('user.film');
});

Route::get('/transaksi', function () {
    return view('admin.transaksi');
});

Route::post('/register', [UserController::class, "index"])->name('index');
Route::post('/login', [UserController::class, "ceklogin"])->name('ceklogin');
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/', function () {
        return view('user.home');
    })->name('homeuser');

    Route::get('/premium', function () {
        return view('user.premium');
    });

    Route::get('/user.price' , function () {
        return view('user.price');
    });

    Route::post('/transaksi', [TransactionController::class, "transaksi"]);
    
});
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/adminHome', function () {
        return view('admin.home');
    });
});
