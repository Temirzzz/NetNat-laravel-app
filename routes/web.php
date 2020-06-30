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


Route::get('/', 'RecordController@allRecords')->name('home');
Route::get('/record/{id}', 'RecordController@reductRecord')->name('record');
Route::post('/record/{id}', 'RecordController@reductRecordSubmit')->name('record-update-submit');
Route::get('/record/{id}/delete', 'RecordController@deleteRecord')->name('record-delete');
Auth::routes();


