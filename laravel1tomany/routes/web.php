<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('emp-index', 'MainController@employeeIndex') -> name('emp-index');
Route::get('emp/{id}', 'MainController@employeeShow') -> name('emp-show');

Route::get('task-index', 'MainController@taskIndex') -> name('task-index');
Route::get('task-show/{id}', 'MainController@taskShow') -> name('task-show');

Route::get('task-create', 'MainController@taskCreate') -> name('task-create');
Route::post('task-store', 'MainController@taskStore') -> name('task-store');

Route::get('task-edit/{id}', 'MainController@taskEdit') -> name('task-edit');
Route::post('/task-update/{id}', 'MainController@taskUpdate') -> name('task-update');

Route::get('typ-index', 'MainController@typIndex') -> name('typ-index');
Route::get('typ-show/{id}', 'MainController@typShow') -> name('typ-show');

Route::get('typ-create', 'MainController@typCreate') -> name('typ-create');
Route::post('typ-store', 'MainController@typStore') -> name('typ-store');

Route::get('typ-edit/{id}', 'MainController@typEdit') -> name('typ-edit');
Route::post('/typ-update/{id}', 'MainController@typUpdate') -> name('typ-update');
