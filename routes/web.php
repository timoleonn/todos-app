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

Route::get('todos', 'TodosController@index');                           //  Display view route
Route::get('todos/{todo}', 'TodosController@show');                     //  Display view route
Route::get('new-todos', 'TodosController@create');                      //  Display view route
Route::post('store-todos', 'TodosController@store');                    //  Actually save the todo, post method
Route::get('todos/{todo}/edit', 'TodosController@edit');                //  Display view route
Route::post('todos/{todo}/update-todos', 'TodosController@update');     //  Actually update the todo, post method
Route::get('todos/{todo}/delete', 'TodosController@destroy');           //  Display view route
Route::get('todos/{todo}/complete', 'TodosController@complete');        //  Display view route