<?php

namespace App\Http\Controllers\Influencer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RegisterInfluencer;

class RegisterController extends Controller
{
    public function getRegister(){
      return View('influencer.register.register');
  }
   public function postRegister(Request $request){
  // バリデーション
  $this->validate($request,[
    'password' => 'required|min:4',
    'tell' => '',
    'name' => 'required',
    'email' => 'required',
    'address' => '',
    'gender' => '',
    'age' => '',
    'sns_kind' => '',
    'sns_url' => '',
    'sns_genre' => '',
  ]);
  
  $registerinfluencer = new Registerinfluencer([//DBに登録するための準備　登録する値を設定
    'password' => bcrypt($request->input('password')),
    'tell' => '',
    'name' => $request->input('name'),
    'email' => $request->input('email'),
    'address' => '',
    'gender' => '',
    'age' => '',
    'sns_kind' => '',
    'sns_url' => '',
    'sns_genre' => '',
  ]);
  // 保存
  $registerinfluencer->save();
 
  // リダイレクト
  //return redirect()->route('influencer.register.complete');
  }
  //インフルエンサー新規登録完了画面view
  public function getComplete(){
  return view('influencer.register.complete');
  }
  //ログイン画面view
  public function getLogin(){
  return view('influencer.register.login');
  }
  //ログインからのPOST処理
  public function postLogin(Request $request)
  {
  $this->validate($request,[
  'email' => 'email|required',
  'password' => 'required|min:4'
  ]);
 
  //if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
 // return redirect()->route('influencer.profile.profile');
  //}
  //return redirect()->back();
  }
  
}

