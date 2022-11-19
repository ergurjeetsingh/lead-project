<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Front\LeaderController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;

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
Route::get('/customer-register', function () {
    return view('pages.customer-register');
});
Route::get('/join-leader', function () {
    return view('pages.join-leader');
});
// Route::get('/leader-register', function () {
//     return view('pages.leader-register');
// });
Route::get('/dashboard-leader', function () {
    return view('pages.dashboard-leader');
});
Route::get('/admin-register', function () {
    return view('adminpages.adminregister');
});
Route::get('/admin-login', function () {
    return view('adminpages.adminLogin');
});

Route::get('/admin-dashboard', function () {
    return view('adminpages.adminDashboard');
});
Route::get('/service-questions', function () {
    return view('admin.services.service-questions');
});


Route::get('login', [AuthController::class, 'login'])->name('customerLogin');
Route::post('login', [AuthController::class, 'login'])->name('customerLogin');
Route::get('adminLogin', [AuthController::class, 'adminLogin'])->name('adminLogin');
Route::post('adminLogin', [AuthController::class, 'adminLogin'])->name('adminLogin');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('forget-Password', [AuthController::class, 'forgetPassword'])->name('forgetPassword');
Route::post('forget-Password', [AuthController::class, 'forgetPassword'])->name('forgetPassword');

Route::get('customer-register', [AuthController::class, 'register'])->name('customerRegister');
Route::post('customer-register', [AuthController::class, 'register'])->name('customerRegister');

Route::get('leader-register', [AuthController::class, 'registerLeader'])->name('leaderRegister');
Route::post('leader-register', [AuthController::class, 'registerLeader'])->name('leaderRegister');

Route::get('dashboard-leader', [LeaderController::class, 'index'])->name('leaderDashboard');

Route::get('admin-dashboard', [DashboardController::class, 'index'])->name('adminDashboard');
Route::get('admin-services', [ServiceController::class, 'index'])->name('adminServices');

Route::get('service-save/{id?}', [ServiceController::class, 'createService'])->name('adminCreateService');
Route::post('service-save/{id?}', [ServiceController::class, 'createService'])->name('adminCreateService');

Route::get('service-delete/{id?}', [ServiceController::class, 'deleteService'])->name('adminDeleteService');
