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

Route::get('/', function () {
    return redirect('/survey');
});

Route::get('/survey/{location_id?}', 'ResponsesController@index');
Route::get('/survey/thanks/{location_id?}', 'ResponsesController@thanks');
Route::post('/responses', 'ResponsesController@store');

Route::get('/questions/all', 'QuestionsController@all')->name('questions.all');
Route::patch('/questions/{id}/restore', 'QuestionsController@restore');
Route::resource('/questions', 'QuestionsController')->except(['show']);

Route::get('/locations/all', 'LocationsController@all')->name('locations.all');
Route::patch('/locations/{id}/restore', 'LocationsController@restore');
Route::resource('locations', 'LocationsController')->except(['show']);

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');
