<?php

use App\Http\Controllers\PricingController;
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
});
Route::get('/trial', function () {
    return view('trial');
})->name('trial');

Route::get('/pricing', [PricingController::class, 'index']);

Route::group(['prefix' => 'features'], function () {
    Route::get('/billing', function () {
        return view('features.billing');
    });
    Route::get('/order-management', function () {
        return view('features.order-management');
    });
    Route::get('/crm', function () {
        return view('features.crm');
    });
    Route::get('/helpdesk', function () {
        return view('features.helpdesk');
    });
});
