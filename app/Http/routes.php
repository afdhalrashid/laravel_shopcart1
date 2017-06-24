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

//direct to view
//Route::get('/', function () {
//    return view('shop.index');
//});

Route::get('/', [
    'uses' => 'ProductController@getIndex', //this router use what function
    'as' => 'product.index'  //this router name
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout'
]);

Route::post('/checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout'
]);

//all the route will have prefix 'user'. ex: /user/signup
Route::group(['prefix'=>'user'], function (){
    Route::get('/signup',[
        'uses' => 'UserController@getSignup',
        'as' => 'user.signup',
        'middleware'=>'guest'
    ]);

    Route::post('/signup',[
        'uses' => 'UserController@postSignup',
        'as' => 'user.signup',
        'middleware'=>'guest'
    ]);

    Route::get('/signin',[
        'uses' => 'UserController@getSignin',
        'as' => 'user.signin',
        'middleware'=>'guest'
    ]);

    Route::post('/signin',[
        'uses' => 'UserController@postSignin',
        'as' => 'user.signin',
        'middleware'=>'guest'
    ]);

    //group into auth middleware
    Route::group(['middleware' => 'auth'], function(){
        Route::get('/profile',[
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
//            'middleware'=>'auth'
        ]);

        Route::get('/logout',[
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout'
//            'middleware'=>'auth'
        ]);
    });


});

