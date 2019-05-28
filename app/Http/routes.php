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

// show the form to open a new BookSell
// create() return a view file bookSell.create 
Route::get('new_bookSell', 'BookSellsController@create');

// store() on BookSellsController which will do the actual storing of the ticket in the database
Route::post('new_bookSell', 'BookSellsController@store');

// display all the books posted by user
Route::get('my_bookSell', 'BookSellsController@userBookSell');

// user to be able to access a particular book 
Route::get('bookSell/{bookSell_id}', 'BookSellsController@show');

// user to be able to delete a particular book
Route::get('bookSell/destroy', 'BookSellsController@destroy');