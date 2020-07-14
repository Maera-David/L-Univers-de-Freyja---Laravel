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

Route::get('/crystals', 'LithotherapyController@grid')->name('lithotherapygrid');

Route::view('/massage', 'massage')->name('massage');

Route::view('/comment', 'commentForm')->name('commentForm');

Route::post('/comment', 'CommentController@saveComment')->name('commentSend');

Route::get('/livre-dor', 'CommentController@showAll')->name('goldBook');

Route::view('/bougies', 'cire')->name('cire');

Route::view('/soins', 'beauty')->name('beauty');

Route::get('/crystals/{id}', 'LithotherapyController@getOne')->name('crystalDescription');

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
