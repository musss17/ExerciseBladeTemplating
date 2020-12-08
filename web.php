<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EbookController;

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


Route::get('subview/master','App\Http\Controllers\EbookController@master');
Route::get('subview/about','App\Http\Controllers\EbookController@about');
Route::get('subview/list','App\Http\Controllers\EbookController@list');

