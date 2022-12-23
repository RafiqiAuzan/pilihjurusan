<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('pages.transactions.index');
})->name('transaction');

Route::get('/dashboard', function () {
    return view('pages..user.dashboard.student');
})->name('dashboard');

Route::get('/transaction2', function () {
    return view('pages.transactions.transaction2');
})->name('transaction2');

Route::get('/receipt', function () {
    return view('pages.transactions.receipt');
})->name('receipt');

Route::get('/detail-transaksi', function () {
    return view('pages.transactions.detail-transaction');
})->name('detail-transaksi');

Route::get('/riwayat-transaksi', function() {
    return view('pages.transactions.transaction-history');
})->name('riwayat-transaksi');

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate']);
    Route::get('lupa-kata-sandi', [LoginController::class, 'index'])->name('forgot-password');
    
});

Route::middleware('auth')->group(function () {
    Route::get(
        'logout',
        function (Request $request) {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect()->to('login');
        }
    );
});
