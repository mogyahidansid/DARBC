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

// Admin Routes
Route::get('/admin', function () {
    return view('admin_corner/dashboard');
})->name('dashboard');
Route::get('/admin/members', function () {
    return view('admin_corner/members');
})->name('admin-members');
Route::get('/admin/user-management', function () {
    return view('admin_corner/user-management');
})->name('staff-management');
Route::get('/admin/release-management', function () {
    return view('admin_corner/release-management');
})->name('release-management');


Route::get('/new_member', function () {
    return view('components/forms/new_member');
})->name('new_member');

// Office Routes
Route::get('office', function () {
    return view('office/dashboard');
})->name('office');
Route::get('/office/members', function () {
    return view('office/members');
})->name('members');
Route::get('/office/ledger', function () {
    return view('office/ledger');
})->name('ledger');
Route::get('/office/ledger/bonus3', function () {
    return view('office/new-release');
})->name('new-release');

Route::get('/office/ledger/bonus-id-details', function () {
    return view('office/bonus-details');
})->name('bonus-details');


// Cashier
Route::get('/cashier/overview', function () {
    return view('cashier/dashboard');
})->name('overview');
Route::get('/cashier/release', function () {
    return view('cashier/release');
})->name('release');
