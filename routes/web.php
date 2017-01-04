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

Route::get('/', 'AuthController@getSignin');
/*
 *--------------------
 * Auth grouop
 * ------------------
 */

Route::group(['prefix' => 'auth'], function() {
    
    Route::get('sign-in', 'AuthController@getSignin');
	Route::post('sign-in', 'AuthController@postSignin');
	Route::get('sign-up', 'AuthController@getSignup');
	Route::get('logout', 'AuthController@getLogout');
	Route::post('sign-up', 'AuthController@postSignup');
	Route::get('forgotten', 'AuthController@getForgotten');
	Route::post('forgotten', 'AuthController@postForgotten');

});


Route::group(['prefix' => 'payment'], function() {
    
    Route::get('pay/{id}','PayController@getPayment');

    Route::get('bitcoincall','PayController@getBitcoinCall');

});

Route::get('rsa/{identifier}','ApiController@getRsaKey');


Route::get('admin/keys','AdminController@getKeys');
