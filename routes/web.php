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

Route::get('/about', function () {
    return "This is the About page";
})->name('about');

Route::get('/tasks', 'TasksController@index')->name('task.index');
Route::post('/tasks', 'TasksController@store')->name('task.store');
Route::get('/tasks/create', 'TasksController@create')->name('task.create');
Route::get('/tasks/edit/{taskid}', 'TasksController@edit')->name('task.edit');
Route::put('/tasks/edit/{taskid}', 'TasksController@update')->name('task.update');
Route::delete('/tasks/edit/{taskid}', 'TasksController@destroy')->name('task.destroy');
