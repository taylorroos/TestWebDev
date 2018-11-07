<?php

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

Route::get('/contatos', 'ContactsController@index')->name('contacts.index');
// Route::get('/contatos/{id}', 'ContactsController@show')->name('contacts.show');
Route::get('/contatos/create', 'ContactsController@create')->name('contacts.create');
Route::post('/contatos', 'ContactsController@store')->name('contacts.store');
Route::get('/contatos/{id}/edit', 'ContactsController@edit')->name('contacts.edit');
Route::put('/contatos/{id}', 'ContactsController@update')->name('contacts.update');
Route::delete('/contatos/{id}', 'ContactsController@delete')->name('contacts.delete');
