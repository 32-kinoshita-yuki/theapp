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

Route::get('/', function () {
    return view('welcome');
});


//共通ホーム画面
Route::get('/', 'UsersController@index');

//Influencer
Route::group(['prefix' => 'influencer'], function() {
Route::get('register/create', 'Influencer\RegisterController@getRegister');  //register　view
Route::get('register/create', 'Influencer\RegisterController@postRegister'); //POST送信した後の処理
Route::get('register/complete', 'Influencer\RegisterController@getComplete'); //register　view録完了
Route::get('/login', 'Influencer\RegisterController@getLogin');        //login view
Route::get('/login', 'Influencer\RegisterController@postLogin');       //ログインからのPOST処理

Route::get('profile/create', 'Influencer\ProfileController@getProfile');   //profile/create
Route::get('profile/create', 'Influencer\ProfileController@create');   //profile/create
Route::get('profile/edit', 'Influencer\ProfileController@edit');       //profile/edit
Route::get('profile/update', 'Influencer\ProfileController@update');   //profile/update

Route::get('blog/create', 'Influencer\BlogController@showCreate')->name('create'); //blog/create ブログの登録画面
Route::post('blog/store', 'Influencer\BlogController@exeStore')->name('store'); //blog/store ブログの登録
Route::get('blog/edit', 'Influencer\BlogController@edit');             //blog/edit
Route::get('/blog', 'Influencer\BlogController@index');                //blog/index
});



//Requester
Route::group(['prefix' => 'requester'], function() {
Route::get('register/create', 'Requester\RegisterController@getRegister');   //register　view
Route::get('register/create', 'Requester\RegisterController@postRegister');  //POST送信した後の処理
Route::get('register/complete', 'Requester\RegisterController@getComplete'); //register　view
Route::get('/login', 'Requester\RegisterController@getLogin');              //login view
Route::get('/login', 'Requester\RegisterController@postLogin');             //ログインからのPOST処理

Route::get('profile/create', 'Requester\ProfileController@getProfile'); //profile/create
Route::get('profile/create', 'Requester\ProfileController@create');     //profile/create
Route::get('profile/edit', 'Requester\ProfileController@edit');         //profile/edit
Route::get('profile/update', 'Requester\ProfileController@update');     //profile/update
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
