<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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
    return redirect('/home');
})->name('dashboard');
Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/faq', function () {
    return view('pages.faq');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
// Route::get('/customer-login', function () {
//     return view('pages.customer-login');
// });


Route::get('customer-login', [AuthController::class, 'login'])->name('customerLogin');
Route::post('customer-login', [AuthController::class, 'login'])->name('customerLogin');