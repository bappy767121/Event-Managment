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
Route::get('/','WelcomeController@index');

Route::get('/event/avilable/{id}','WelcomeController@event');

Route::get('/detiels/{id}','WelcomeController@eventDetiles');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//*category info
Route::get('/category/add', 'CategoryController@creatCategory');
Route::post('/category/save', 'CategoryController@storeCategory');
Route::get('/category/manage', 'CategoryController@manageCategory');
Route::get('/category/edit/{id}', 'CategoryController@editCategory');
Route::post('/category/update', 'CategoryController@updateCategory');
Route::get('/category/delete/{id}', 'CategoryController@deleteCategory');
//*category info
//*category info
Route::get('/type/add', 'TypeController@creatType');
Route::post('/type/save', 'TypeController@storeType');
Route::get('/type/manage', 'TypeController@manageType');
Route::get('/type/edit/{id}', 'TypeController@editType');
Route::post('/type/update', 'TypeController@updateType');
Route::get('/type/delete/{id}', 'TypeController@deleteType');
//*category info
Route::get('/event/add', 'EventController@creatEvent');
Route::post('/event/save', 'EventController@storeEvent');
Route::get('/event/manage', 'EventController@manageEvent');
Route::get('/event/view/{id}', 'EventController@viewEvent');
Route::get('/event/edit/{id}', 'EventController@editEvent');
Route::post('/event/update', 'EventController@updateEvent');
Route::get('/event/delete/{id}', 'EventController@deleteEvent');