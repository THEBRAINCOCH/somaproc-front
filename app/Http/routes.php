<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::auth();

Route::get('/home', 'clientcontroller@index')->name('client.home');

Route::get ("/","clientcontroller@landing");

Route::get ("/contact","clientcontroller@contact")->name('client.getContact');
Route::post ("/contact","clientcontroller@store")->name('client.contact');

Route::get ("/about","clientcontroller@about");

Route::get ("/Company","clientcontroller@Company");

Route::get ("/Statistics","clientcontroller@Statistics");

Route::get ("/Usefulllink","clientcontroller@Usefulllink");

Route::get ("/gallery","clientcontroller@gallery");

Route::get ("/icons","clientcontroller@icons");


Route::get ("/products/{id}","clientcontroller@products");

Route::get ("/services","clientcontroller@services");

Route::get ("/typography","clientcontroller@typography");

Route::get ("/News","clientcontroller@News");

Route::get ("/News/{id}","clientcontroller@topic");







//************************* Change Language route ***************//
Route::get('/language-landing/{lang}',['as' =>'language-landing','uses' =>'clientcontroller@languageChooser1'
]);

//************************* Change Language route ***************//
Route::get('/language-chooser/{lang}',['as' =>'language-choose','uses' =>'clientcontroller@languageChooser'
]);





