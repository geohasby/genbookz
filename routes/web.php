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

Route::get('/', 'WelcomeController@index');

Auth::routes(['verify' => true]);

Route::get('home', 'HomeController@index')
    ->name('home')
    ->middleware('auth', 'verified');

Route::get('search', 'SearchController@search')
    ->name('search')
    ->middleware('auth', 'verified');

Route::get('info', 'FooterController@index')
    ->name('footer');

Route::get('kritik_saran', 'KritikController@showContactForm')
    ->name('kritik');

Route::post('kirim_kritik', 'KritikController@sendMail')
    ->name('kirim_kritik');

Route::get('profile', 'ProfileController@index')
    ->name('profile');

Route::get('menten/sit/lur', function (){
    return Artisan::call('down');
});

//SETTINGS
Route::get('setting/edit_profile', 'SettingController@edit_profile')
    ->name('setting.edit_profile')
    ->middleware('auth', 'verified');

Route::patch('setting/update_profile', 'SettingController@update_profile')
    ->name('setting.update_profile')
    ->middleware('auth', 'verified');

Route::get('setting/change_password', 'SettingController@change_password')
    ->name('setting.change_password')
    ->middleware('auth', 'verified');

Route::patch('setting/update_password', 'SettingController@update_password')
    ->name('setting.update_password')
    ->middleware('auth', 'verified');

Route::get('setting/notification', 'SettingController@notification')
    ->name('setting.notification')
    ->middleware('auth', 'verified');

Route::get('setting/language', 'SettingController@language')
    ->name('setting.language')
    ->middleware('auth', 'verified');

Route::get('setting/connection', 'SettingController@connection')
    ->name('setting.connection')
    ->middleware('auth', 'verified');


//STORIES
Route::get('daftar_isi', 'DaftarIsiController@index')
    ->name('daftar_isi')
    ->middleware('auth', 'verified');

Route::get('category', 'CategoryController@index')
    ->name('category')
    ->middleware('auth', 'verified');

Route::get('story/{title}', 'Story\StoryController@index')
    ->middleware('auth', 'verified');

Route::get('story/{title}/{chapter}', 'Story\StoryController@read')
    ->middleware('auth', 'verified');

Route::post('comment', 'Story\CommentController@comment')
    ->name('comment')
    ->middleware('auth', 'verified');