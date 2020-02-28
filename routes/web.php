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

use App\Http\Controllers\AssignmentController;

Route::get('/', function () {

    return view('welcome', [
        'plevents' => App\PlEvent::take(15)->get()
    ]);
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/assignments', 'AssignmentController@index');
Route::get('/assignments/create', 'AssignmentController@create');
Route::get('/assignments/{assignment}', 'AssignmentController@show');

Route::get('/clients', 'ClientController@index');
Route::post('/clients', 'ClientController@store');
Route::get('/clients/create', 'ClientController@create');
Route::get('/clients/{client}', 'ClientController@show');
Route::put('/clients/{client}', 'ClientController@update');
Route::get('/clients/{client}/edit', 'ClientController@edit');
