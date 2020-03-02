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

    $user = \Illuminate\Support\Facades\Auth::user();

    if ($user->isAdmin()){
        echo "yes admin";
    }
//    return view('welcome');
});

Route::get('/admin/role', function () {
    return 'midle ware';
})->middleware('role');

Auth::routes();

Route::get('/admin', 'AdminController@index');

Route::get('/home', 'HomeController@index')->name('home');
