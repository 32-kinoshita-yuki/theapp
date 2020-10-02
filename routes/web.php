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

//インフルエンサー新規登録画面
Route::group(['prefix' => 'influencer'], function() {
Route::get('/register',[
 'uses' => 'Influencer\RegisterController@getRegister',
  'as' => 'influencer.register'
   ]);
//POST送信した後の処理
Route::post('/register',[
  'uses' => 'Influencer\RegisterController@postRegister',
  'as' => 'influencer.register'
  ]);
 //登録完了画面
  Route::get('/complete',[
  'uses' => 'Influencer\RegisterController@getComplete',
  'as' => 'influencer.complete'
  ]);
  //ログイン画面
Route::get('/login',[
  'uses' => 'RegisterInfluencersController@getLogin',
  'as' => 'influencer.login'
  ]);
   //ログインからのPOST処理
  Route::post('/login',[
  'uses' => 'Influencer\RegisterController@postLogin',
  'as' => 'influencer.login'
]);
 //プロフィール画面
Route::get('/profile',[
  'uses' => 'Influencer\ProfileController@getProfile',
  'as' => 'influencer.profile'
]);
 //blog create
Route::get('blog/create',[
  'uses' => 'Influencer\BlogController@create',
]);
//blog edit
Route::get('blog/edit',[
  'uses' => 'Influencer\BlogController@edit',
]);
 //blog edit
Route::get('blog/edit',[
  'uses' => 'Influencer\BlogController@update',
]);

});




 //依頼者登録画面
 Route::group(['prefix' => 'requester'], function() {
     Route::get('/register',[
 'uses' => 'Requester\RegisterController@getRegister',
  'as' => 'requester.register'
   ]);
//POST送信した後の処理
Route::post('/register',[
  'uses' => 'Requester\RegisterController@postRegister',
  'as' => 'requester.register'
  ]);
 //登録完了画面
  Route::get('/complete',[
  'uses' => 'Requester\RegisterController@requesterComplete',
  'as' => 'requester.complete'
  ]);
  //ログイン画面
Route::get('/login',[
  'uses' => 'Requester\RegisterController@getLogin',
  'as' => 'requester.login'
  ]);
//ログイン画面POST処理
  Route::post('/login',[
  'uses' => 'Requester\RegisterController@postLogin',
  'as' => 'requester.login'
]);

});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
