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
Auth::routes();

Route::get('/', [
  'uses' => 'HomeController@index',
  'as' => 'index'
]);

Route::get('chat', [
  'uses' => 'ChatsController@index',
  'as' => 'chat'
]);

Route::get('messages', [
  'uses' => 'ChatsController@fetchMessages',
  'as' => 'getMsg'
]);

Route::post('messages', [
  'uses' => 'ChatsController@sendMessage',
  'as' => 'sendMsg'
]);
