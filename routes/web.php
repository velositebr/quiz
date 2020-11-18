<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

/* Frontend Routes */
Route::get('/', 'IndexController@index');
Route::get('/ams', 'AMSController@index')->name('ams');
Route::post('/result-ams', 'AMSController@result')->name('ams');
Route::get('/disfuncao-eretil', 'DEController@index')->name('disfuncao-eretil');

Route::get('/admin', function () {
    return redirect('backend/dashboard');
});

Auth::routes();

Route::namespace('Backend')->prefix('backend')->name('backend.')->group(function(){
    Route::resource('/dashboard', 'DashboardController');
});

Route::namespace('Backend')->prefix('backend')->name('backend.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UsersController');
});

Route::namespace('Backend')->prefix('backend')->name('backend.')->middleware('can:edit-user-profile')->group(function(){
    Route::resource('/profile', 'ProfilesController');
});

Route::namespace('Backend')->prefix('backend')->name('backend.')->middleware('can:manage-settings')->group(function(){
    Route::resource('/settings', 'SettingsController');
});

Route::namespace('Backend')->prefix('backend')->name('backend.')->middleware('can:manage-contacts')->group(function(){
    Route::resource('/contacts', 'ContactsController');
});

Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');
