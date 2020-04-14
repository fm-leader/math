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
    return view('welcome');
})->name('welcome');;

Route::get('contacts', 'SitewebController@contact')->name('contacts');
Route::get('presentation', 'SitewebController@presentation')->name('presentation');
Route::get('formations', 'SitewebController@formations')->name('formations');





//Route::group(['namespace'=> 'Eleve', 'prefix'=>'eleve'], function (){

    // Route Pour la creation,l' Edition, L'affichage, et  la modifition des commandes


    Route::resource('eleve','eleve\EleveController');


  //  Route::get('eleve.index','EleveController@index');



//});




