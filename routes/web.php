<?php

use Illuminate\Support\Facades\Route;

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
	return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/features', 'FeatureController@index')->name('index.feature');
Route::get('/features/new', 'FeatureController@create')->name('create.feature');
Route::post('/features/new', 'FeatureController@store')->name('store.feature');
Route::get('/features/{id}/show', 'FeatureController@show')->name('show.feature');
Route::get('/features/{id}/edit', 'FeatureController@edit')->name('edit.feature');
Route::patch('/features/{id}/edit', 'FeatureController@update')->name('update.feature');
Route::delete('/features/{id}',	    'FeatureController@destroy')->name('delete.feature');

Route::get('/features/{id}/alleles', 'AlleleController@create')->name('create.allele');
Route::post('/features/{id}/alleles/new', 'AlleleController@store')->name('store.allele');



//--Plants resources--//


Route::get('/plants', 'PlantController@index')->name('index.plant');
Route::get('/plants/new', 'PlantController@create')->name('create.plant');
Route::post('/plants/new', 'PlantController@store')->name('store.plant');



Route::get('/plants/{id}/features/new', 'PlantFeatureController@create')->name('create.plantFeature');
Route::post('/plants/{id}/features/new', 'PlantFeatureController@store')->name('store.plantFeature');