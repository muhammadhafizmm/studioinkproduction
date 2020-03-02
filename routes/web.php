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

Route::get('/', 'PagesController@home');
Route::get('/photography', 'PhotographyPage@index');
Route::get('/videography', 'VideographyPage@index');

// admin page
Route::get('/login', 'AuthController@login')->name("login");
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'], function () {
    // dashboard admin controll
    Route::get('/dashboard', 'AdminController@index');
    Route::get('/dashboard/photography', 'AdminController@editPhotography');
    Route::get('/dashboard/videography', 'AdminController@editVideography');
    Route::get('/dashboard/client', 'AdminController@editClient');
    // untuk nambah concept photo
    Route::get('/dashboard/tambahConcept', 'PhotographyPage@create');
    Route::post('/dashboard/tambahConcept', 'PhotographyPage@store');
    // untuk nambah document photo
    Route::get('/dashboard/tambahDocument', 'PhotographyPage@create');
    Route::post('/dashboard/tambahDocument', 'PhotographyPage@store');
    //untuk nambah video
    Route::get('/dashboard/tambahVideo', 'VideographyPage@create');
    Route::post('/dashboard/tambahVideo', 'VideographyPage@store');
    //untuk menambah client
    Route::get('/dashboard/tambahClient', 'ClientController@create');
    Route::post('/dashboard/tambahClient', 'ClientController@store');
    // delete photo
    Route::delete('/dashboard/photography', 'PhotographyPage@destroy');
    Route::delete('/dashboard/videography', 'Videographypage@destroy');
    Route::delete('/dashboard/client', 'ClientController@destroy');
});
