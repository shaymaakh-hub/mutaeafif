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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mutaeafif', function () {
    return view('index');
})->name('mutaeafif');


Route::get('/registeration', 'UserController@index')->name('registeration');

Route::post('/registeration/store', 'UserController@store')->name('registeration.store');

Route::get('/cases', 'CaseController@index')->name('cases');

Route::post('/contributorinfo/store/{id}', 'ContributorController@store')->name('contributorinfo.store');

Route::get('/contributorinfo/{id}', 'ContributorController@index')->name('contributorinfo');



 Route::get('/dashboard/delete/{id}', 'AdminController@destroy')->name('needy.delete');
 Route::get('/dashboard/approve/{id}', 'AdminController@approve')->name('admin.approve');
 Route::get('/dashboard/donation/{id}', 'AdminController@donation')->name('needy.donation');
 Route::get('/dashboard/edit/{id}', 'AdminController@edit')->name('needy.edit');
 Route::post('/dashboard/update/{id}', 'AdminController@update')->name('needy.update');
 Route::get('/dashboard/admin/{id}', 'AdminController@admin')->name('users.admin');
Route::get('/dashboard/notadmin/{id}', 'AdminController@notAdmin')->name('users.not.admin');





