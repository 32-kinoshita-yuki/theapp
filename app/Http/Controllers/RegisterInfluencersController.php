<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegisterInfluencer;
use Auth;

class RegisterInfluencersController extends Controller
{
    public function getRegister(){
      return View('influencer.register');
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
  return redirect()->route('influencer.complete');
}
//インフルエンサー新規登録完了画面view
  public function influencerComplete(){
  return view('influencer.complete');
}
//インフルエンサーログイン画面view
public function getLogin(){
  return view('influencer.login');
  }
  //インフルエンサーログイン処理
  public function postLogin(Request $request)
  {
  $this->validate($request,[
  'email' => 'email|required',
  'password' => 'required|min:4'
  ]);
 
  if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
  return redirect()->route('admin.influencer.profile');
  }
  return redirect()->back();
  }
  
}