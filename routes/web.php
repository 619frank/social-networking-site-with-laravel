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
//homepage
Route::get('/', [
    'uses'=>'HomeController@index',
    'as' => 'home',    
    ]
);
//signup page
Route::get('/signup',[
    'uses'=>'AuthController@getSignup',
    'as' => 'auth.signup',
    // 'middleware'=>['guest']
]);
//submitting the signup data
Route::post('/signup',[
    'uses'=>'AuthController@postSignup',
    // 'middleware'=>['guest']
]);
//get signin page
Route::get('/signin', [
    'uses'=>'AuthController@getSignin',
    'as'=>'auth.signin']);
//signin submission
Route::post('/signin', [
    'uses'=>'AuthController@postSignin',
    'as'=>'auth.signin']);

//get signout
Route::get('/signout', [
    'uses'=>'AuthController@getSignout',
    'as'=>'auth.signout']);

