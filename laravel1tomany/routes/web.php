<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('emp-index', 'MainController@employeeIndex') -> name('emp-index');
Route::get('emp/{id}', 'MainController@employeeShow') -> name('emp-show');

Route::get('task-index', 'MainController@taskIndex') -> name('task-index');
Route::get('task-create', 'MainController@taskCreate') -> name('task-create');
Route::post('task-store', 'MainController@taskStore') -> name('task-store');

Route::get('task-edit/{id}', 'MainController@taskEdit') -> name('task-edit');
