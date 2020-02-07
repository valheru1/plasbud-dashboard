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

Route::get('/', function() {

    return view('welcome',[
        'plevents' => App\PlEvent::take(15)->get()
    ]);
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/assignments', 'AssignmentController@index');

Route::get('/assignments/{id}', 'AssignmentController@show');
