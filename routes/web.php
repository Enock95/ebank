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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homes', 'HomeController@create')->name('homes');
Route::get('dash/profile/{user}', 'ProfilesController@index')->name('profile.create');
Route::patch('dash/profile/{user}', 'ProfilesController@update')->name('profiles.update');
Route::get('dash/setting/create', 'SettingController@index')->name('setting.create');
Route::group(['middleware' => ['can:manager-users']], function () {
    
});
Route::get('admin/adduser/create', 'UsersController@create')->name('adduser.create');
Route::get('admin/adduser/index', 'UsersController@index')->name('adduser.index');
Route::get('admin/users/index', 'UsersController@list')->name('admin.users.index')->middleware('can:edit-users');
Route::get('admin/users/{user}/edit', 'UsersController@edit')->name('admin.users.edit');
Route::post('admin/users/{user}', 'UsersController@update')->name('admin.users.update');
Route::get('admin/add_balance/create', 'AccountsController@create')->name('add_balance.index');

Route::get('dash/transfer/create', 'TransferController@create')->name('transfer.create');

Route::post('admin/adduser/store', 'UsersController@store')->name('adduser.store');

