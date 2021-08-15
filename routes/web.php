<?php

use App\Http\Controllers\StaticContentController;
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
    return view('welcome');
})->name('welcome');

Route::get('/portfolio-details', function () {
    return view('pages.portfolio-details');
})->name('portfolio-details');

Route::get('/inner-page', function () {
    return view('pages.inner-page');
})->name('inner-page');

// BACK OFFICE
Route::get('/backoffice/dashboard', function () {
    return view('pages.backoffice.backofficeHome');
})->name('dashboard');

Route::get('/backoffice/static/content', [StaticContentController::class, 'index'])->name('staticContent');