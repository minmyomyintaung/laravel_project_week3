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
Route::get('/','ReceipesController@index');
// Route::get('/','HomeController@home');
// Route::get('php','HomeController@php');
// Route::get('js','HomeController@js');

// Route::get('/', function () {
//     return view('home',[
//       'home'=>"HomePage Tamplate"
//     ]);
// });
// Route::get('/php', function () {
//     return view('php',[
//       "data"=>array(
//         "lesson1"=>"this is php lesson1",
//         "lesson2"=>"this is php lesson2",
//         "lesson3"=>"this is php lesson3",
//       )
//     ]);
// });
// Route::get('/js', function () {
//     return view('js',[
//       "data"=>array(
//         "lesson1"=>"this is js lesson1",
//         "lesson2"=>"this is js lesson2",
//         "lesson3"=>"this is js lesson3",
//       )
//     ]);
// });
