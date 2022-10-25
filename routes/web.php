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

Route::get('/admin', function () {
    return view('admin_corner/dashboard');
});
Route::get('/admin/members', function () {
    return view('admin_corner/members');
});
Route::get('/admin/release-management', function () {
    return view('admin_corner/release-management');
});


Route::get('/', function () {
    return view('components/forms/new_member');
});
Route::get('/cashier/release', function () {
    return view('cashier/release');
});
