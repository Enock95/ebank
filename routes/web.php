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
// Route::get('dash/profile/{user}', 'ProfilesController@index')->name('profile.create');
// Route::patch('dash/profile/{user}', 'ProfilesController@update')->name('profiles.update');
// Route::get('dash/setting/create', 'SettingController@index')->name('setting.create');
Route::group(['middleware' => ['can:manager-users']], function () {
    
});
Route::get('admin/adduser/create', 'UsersController@create')->name('adduser.create');
Route::get('admin/adduser/index', 'UsersController@index')->name('adduser.index');
Route::get('admin/users/index', 'UsersController@list')->name('admin.users.index')->middleware('can:edit-users');
// Route::get('admin/users/{user}/edit', 'UsersController@edit')->name('admin.users.edit');
Route::get('admin/users/edit/{id}', 'UsersController@edit')->name('admin.users.edit');
//Route::post('admin/users/{user}', 'UsersController@update')->name('admin.users.update');
Route::post('admin/users/update/{id}', 'UsersController@update')->name('admin.users.update');
Route::post('admin/users/delete/{id}', 'UsersController@destroy')->name('admin.users.delete');

//Route::get('admin/add_balance/create', 'AccountsController@create')->name('add_balance.index');
Route::get('admin/add_balance/codes', 'UsersController@showCodes')->name('showCodes');
Route::get('admin/add_balance/create/{id}', 'UsersController@balanceEdit')->name('balanceEdit');
Route::post('admin/add_balance/update/{id}', 'UsersController@balanceUpdate')->name('balanceUpdate');


Route::get('dash/transfer/create', 'TransferController@create')->name('transfer.create');
Route::get('dash/transfer/cot', 'TransferController@cot')->name('verif_cot');
Route::get('dash/transfer/tax', 'TransferController@tax')->name('verif_tax');
Route::get('dash/transfer/imf', 'TransferController@imf')->name('verif_imf');
Route::get('dash/transfer/atc', 'TransferController@atc')->name('verif_atc');
Route::get('dash/transfer/telex', 'TransferController@telex')->name('verif_telex');
Route::get('dash/transfer/transfer', 'TransferController@transfer')->name('transfer');


Route::post('admin/adduser/store', 'UsersController@store')->name('adduser.store');

