<?php

use App\Receipe;
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

// Route::get('/', function () {
//     return view('home', [
//     	'name'=> "Home Page Template"
//     ]);
// });

// Route::get('php', function () {
//     return view('php',[
//     	"data" => array(
//     		"lesson1" => "this is php lesson1",
//     		"lesson2" => "this is php lesson2",
//     		"lesson3" => "this is php lesson3"
//     	)
//     ]);
// });

// Route::get('js', function () {
//     return view('js', [
//     	"data" => array(
//     		"lesson1" => "this is js lesson1",
//     		"lesson2" => "this is js lesson2",
//     		"lesson3" => "this is js lesson3"
//     	)
//     ]);
// });

// Route::get('/', 'HomeController@index');
// Route::get('php', 'HomeController@phpPage');
// Route::get('js', 'HomeController@jsPage');

Route::get('/', 'PublicController@index');

Route::get('detail/{id}', 'PublicController@show');

Route::resource('receipe', 'ReceipeController');

Route::resource('category', 'CategoryController');

Route::get('home', 'HomeController@index');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
