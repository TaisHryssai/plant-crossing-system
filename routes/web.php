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

Route::get('/features', 'FeatureController@index')->name('features.index');
Route::get('/features/new', 'FeatureController@create')->name('features.create');
Route::post('/features/new', 'FeatureController@store')->name('features.store');
Route::get('/features/{id}/show', 'FeatureController@show')->name('features.show');
Route::get('/features/{id}/edit', 'FeatureController@edit')->name('features.edit');
Route::patch('/features/{id}/edit', 'FeatureController@update')->name('features.update');
Route::delete('/features/{id}',	    'FeatureController@destroy')->name('features.destroy');

Route::get('/features/{id}/alleles', 'AlleleController@create')->name('create.allele');
Route::post('/features/{id}/alleles/new', 'AlleleController@store')->name('store.allele');



//--Plants resources--//


Route::get('/plants', 'PlantController@index')->name('plants.index');
Route::get('/plants/new', 'PlantController@create')->name('plants.create');
Route::post('/plants/new', 'PlantController@store')->name('plants.store');

Route::get('/plants/{id}/show', 'PlantFeatureController@show')->name('plants.show');
Route::get('/plants/{id}/edit', 'PlantFeatureController@edit')->name('plants.edit');
Route::patch('/plants/{id}/edit', 'PlantFeatureController@update')->name('plants.update');
Route::delete('/plants/{id}',	    'PlantFeatureController@destroy')->name('plants.destroy');


Route::get('/plants/{id}/features/new', 'PlantFeatureController@create')->name('create.plantFeature');
Route::post('/plants/{id}/features/new', 'PlantFeatureController@store')->name('store.plantFeature');

Route::get('/plants/cross_plants', 'CrossPlantController@index')->name('crosPlant.index');
Route::get('/plants/cross_plant', 'CrossPlantController@create')->name('crosPlant.create');
Route::post('/plants/cross_plant', 'CrossPlantController@store')->name('crosPlant.store');
