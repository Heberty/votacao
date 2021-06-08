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

Route::get('/', 'Pages\PagesController@index')->name('index');

Auth::routes(['register' => false]);

Route::group(['middlewere' => ['auth'], 'namespace' => 'Admin'], function() {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('/', 'AdminController@index')->name('index');
        
        /* Rotas de Votos*/
		Route::get('votes', 'VotesController@index')->name('votes.index');
		Route::get('votes/create', 'VotesController@create')->name('votes.create');
		Route::post('votes/store', 'VotesController@store')->name('votes.store');
		Route::get('votes/edit/{vote}', 'VotesController@edit')->name('votes.edit');
		Route::patch('votes/{vote}', 'VotesController@update')->name('votes.update');
		Route::delete('votes/delete/{vote}', 'VotesController@destroy')->name('votes.destroy');
    });
});
