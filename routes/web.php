<?php

use Illuminate\Support\Facades\Route;


// Route::get('/about', 'PagesController@about');

Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/', 'App\Http\Controllers\PagesController@index');



/*Route::get('/', function () {
    return view('pages.index');
  });
//   Route::get('/about', function () {
//     return view('pages.index');
//   });
*/
  


