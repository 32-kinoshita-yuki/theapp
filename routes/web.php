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
 'uses' => 'RegisterInfluencersController@getRegister',
  'as' => 'influencer.register'
   ]);
//POST送信した後の処理
Route::post('/register',[
  'uses' => 'RegisterInfluencersController@postRegister',
  'as' => 'influencer.register'
  ]);
 //登録完了画面
  Route::get('/complete',[
  'uses' => 'RegisterInfluencersController@influencerComplete',
  'as' => 'influencer.complete'
  ]);
  //ログイン画面
Route::get('/login',[
  'uses' => 'RegisterInfluencersController@getLogin',
  'as' => 'influencer.login'
  ]);
   //ログイン画面POST処理
  Route::post('/login',[
  'uses' => 'RegisterInfluencersController@postLogin',
  'as' => 'influencer.login'
]);
 //プロフィール画面
Route::get('/profile',[
  'uses' => 'ProfileInfluencersController@getProfile',
  'as' => 'influencer.profile'
]);



});




 //依頼者登録画面
 Route::group(['prefix' => 'requester'], function() {
     Route::get('/register',[
 'uses' => 'RegisterRequestersController@getRegister',
  'as' => 'requester.register'
   ]);
//POST送信した後の処理
Route::post('/register',[
  'uses' => 'RegisterRequestersController@postRegister',
  'as' => 'requester.register'
  ]);
 //登録完了画面
  Route::get('/complete',[
  'uses' => 'RegisterRequestersController@requesterComplete',
  'as' => 'requester.complete'
  ]);
  //ログイン画面
Route::get('/login',[
  'uses' => 'RegisterRequestersController@getLogin',
  'as' => 'requester.login'
  ]);
//ログイン画面POST処理
  Route::post('/login',[
  'uses' => 'RegisterRequestersController@postLogin',
  'as' => 'requester.login'
]);

});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
