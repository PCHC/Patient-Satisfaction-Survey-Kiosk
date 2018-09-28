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
    return view('welcome');
});

Route::get('/survey', 'QuestionsController@index');

Route::get('/questions', 'QuestionsController@index');

Route::get('/questions/create', 'QuestionsController@create');

Route::post('/questions', 'QuestionsController@store');

Route::get('/questions/{question}', 'QuestionsController@show');

/**
 * REST routes:
 * 
 * GET /questions
 * GET /questions/create
 * POST /questions
 * GET /questions/{id}/edit
 * GET /questions/{id}
 * PATCH /questions/{id}
 * DELETE /questions/{id}
 */