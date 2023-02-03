<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/master', [HomeController::class, 'master'])->name('master');
Route::get('/payment', [HomeController::class, 'payment'])->name('payment');
Route::get('/shipment', [HomeController::class, 'shipment'])->name('shipment');
Route::get('/employee', [HomeController::class, 'employee'])->name('employee');
Route::get('/vehicle', [HomeController::class, 'vehicle'])->name('vehicle');
Route::get('/add-shipment', [HomeController::class, 'addShipment'])->name('add-shipment');
Route::get('/add-vehicle', [HomeController::class, 'addDriver'])->name('add-shipment');
Route::get('/add-employee', [HomeController::class, 'addEmployee'])->name('add-shipment');
Route::get('/add-payment', [HomeController::class, 'addPayment'])->name('add-shipment');
Route::get('/dashboard-profile', [HomeController::class, 'dashboardProfile'])->name('dashboard-profile');
Route::get('/dashboard-admin', [HomeController::class, 'dashboardAdmin'])->name('dashboard-admin');

route::get('test',function(){return view('test');});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
