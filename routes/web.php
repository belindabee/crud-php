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
// Route::group(['prefix'=>'admin','middleware'=>['web']],function(){
//     Route::get('/',['uses' => 'HomeController@index','as' => 'home.index']);
//     Route::get('/about',['uses' => 'HomeController@about','as' => 'home.about']);
//     Route::get('/help',['uses' => 'HomeController@help','as' => 'home.help']);
// });

Route::get('/', function () {
    return view('welcome',['name' =>'Bianca Belinda Muhamad']);
}); 

Route::get('/about', function () {
    return view('about',['name' =>'Bianca Belinda Muhamad']);
});

