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

Route::get('/receipt', function () {
    return view('pages.transactions.receipt');
})->name('receipt');

// Route::middleware('guest')->group(function () {
//     Route::get('login', [LoginController::class, 'index'])->name('login');
//     Route::post('login', [LoginController::class, 'authenticate']);
//     Route::get('lupa-kata-sandi', [LoginController::class, 'index'])->name('forgot-password');
// });
// // Route::get('/', function () {
// //     return view('pages.partner');
// //     return view('pages.footer');
// // });
// // Route::get('/', function () {
// //     return view('pages.home-benefit');
// // });


// // Route::get('/', function () {
// //     return view('pages.home-activities');
// // });

// Route::middleware('auth')->group(function () {
//     Route::get(
//         'logout',
//         function (Request $request) {
//             Auth::logout();

//             $request->session()->invalidate();

//             $request->session()->regenerateToken();

//             return redirect()->to('login');
//         }
//     );
// });
