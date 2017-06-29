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
  
Route::get('/', 'PagesController@index');

Route::get('/college', 'PagesController@college');

Route::get('/collegeFinder', 'PagesController@collegeFinder');
Route::post('/search', 'SyllabusController@search');
Route::post('/load', 'SyllabusController@load');

Route::resource('syllabus', 'SyllabusController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/download', function(){
	Excel::create('sagar', function($excel){
		$excel->sheet('sheetname', function($sheet){
			$disc = \App\Discussion::all();
			$sheet-> fromModel($disc);

		});
	})->download('xls');
});





?>