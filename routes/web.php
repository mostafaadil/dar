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


  /* pages Routs */

  Route::get('/language/{lang}','LnagController@index');

Route::get('/car','CarsController@getCarsData');

Route::get('/about-us','CarsController@aboutUs');

Route::get('/all-cars','CarsController@carsDataJson');

Route::get('/contact','CarsController@contact');

Route::get('/blog','CarsController@blog');

Route::get('/pricing','CarsController@pricing');







Route::get('cars/create','CarsController@create');
Route::post('cars/store','CarsController@store');
Route::get('/cars','CarsController@show');
Route::get('/cars/delete/{id}','CarsController@destroy');
Route::get('/edit/{id}','CarsController@edit');
Route::post('cars/update','CarsController@update');
Route::get('/car-book','CarsController@index');


Route::get('contact/create','ContactsController@create');
Route::post('contact/store','ContactsController@store');
Route::get('/contact','ContactsController@show');
Route::get('/contact/delete/{id}','ContactsController@destroy');
Route::get('/contact/{id}','ContactsController@edit');
Route::post('contact/update','ContactsController@update');
Route::get('/index','websiteController@index');


Route::get('contact/create','ContactsController@create');
Route::post('/order','OerdersController@store');
Route::get('/contact','ContactsController@show');
Route::get('/contact/delete/{id}','ContactsController@destroy');
Route::get('/order/{id}','OerdersController@edit');
Route::post('contact/update','ContactsController@update');
Route::get('/show-orders','OerdersController@index');




Route::get('/side-bar',function(){
  return view('home');
}) ;

Route::get('/derution','websiteController@dreontaionReport');
Route::get('/month','websiteController@monthreport');




Route::post('/save','ProductController@store') ;
Route::get('/inline-pro','ProductController@inlinePro' ) ;
Route::get('/catogries/{id}','ProductController@byCat' ) ;



Route::get('/inline-pro-ar','ProductController@inlineProar' ) ;
Route::get('/edation-pro-en','ProductController@editDeleteen');


Route::get('/new-product','ProductController@create' ) ;
Route::get('/','ProductController@index') ;
Route::get('/edation-pro','ProductController@editDelete');
Route::get('/delete-pro/{id}', ['uses' => 'ProductController@destroy']);
Route::get('/edit-pro/{id}', ['uses' => 'ProductController@edit']);
Route::post('/update-pro', ['uses' => 'ProductController@updateItem']);
Route::get('/search-pro/{name},{flag}', ['uses' => 'ProductController@search']);
Route::get('/prodactsReport/{date},{flag}','ProductController@prodactsReport') ;
Route::get('/deuration-pr-report/{date},{flag}','ProductController@getRecord') ;

/**/


/*Products Catogires Routes */
Route::get('/inline-proclas','ProductclassificationController@inlinePro' ) ;
Route::get('/inline-proclasen','ProductclassificationController@inlineProen' ) ;



Route::get('/inline-proclas-ar','ProductclassificationController@inlineProar' ) ;
Route::get('/edation-pro-classification-en','ProductclassificationController@editDeleteen');


Route::get('/new-pro-classification','ProductclassificationController@create' ) ;
Route::post('/save-pro-classification','ProductclassificationController@store');
Route::get('/edation-pro-classification','ProductclassificationController@editDelete');
Route::get('/delete-pro-classification/{id}', ['uses' => 'ProductclassificationController@destroy']);
Route::get('/edit-pro-classification/{id}', ['uses' => 'ProductclassificationController@edit']);
Route::post('/update-pro-classification', ['uses' => 'ProductclassificationController@updateItem']);
Route::get('/search-pro-classification/{name}', ['uses' => 'ProductclassificationController@search']);
Route::get('/calssfactionReport/{date},{flag}','ProductclassificationController@calssfactionReport') ;
Route::get('/classftion-print','ProductclassificationController@generatePDF58') ;
Route::get('/deuration-ps-report/{date},{flag}','ProductclassificationController@getRecord') ;




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/ui', 'ui.index');Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/ui', 'ui.index');
