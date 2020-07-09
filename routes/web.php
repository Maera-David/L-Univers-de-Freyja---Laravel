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

Route::view('/', 'index')->name('index');

Route::view('/apropos', 'about')->name('apropos');

Route::view('/contact', 'contactForm')->name('contactForm');

Route::post('/contact', 'ContactController@sendMail')->name('contactSend');

Route::view('/crystals', 'lithotherapygrid')->name('lithotherapygrid');

// $router->get('/', ['as' => 'index', function () {
//     return view('index');
// }]);

// $router->get('/apropos', ['as'=> 'apropos', function() {
//     return view('about');
// }]);

// $router->get('/contact', ['as'=> 'contactForm', function() {
//     return view('contactForm');
// }]);

// $router->post('/contact', ['as'=> 'contactSend', 'uses' => 'ContactController@sendMail']);