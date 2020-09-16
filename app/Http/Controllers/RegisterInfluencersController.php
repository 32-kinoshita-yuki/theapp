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
    'tell' => 'required',
    'name' => 'required',
    'email' => 'email|required|unique:users',
    'address' => 'required',
    'gender' => 'required',
    'age' => 'required',
    'sns_kind' => 'required',
    'sns_url' => 'required',
    'sns_genre' => 'required',
  ]);
  
  $registerinfluencer = new Registerinfluencer([
    'password' => bcrypt($request->input('password')),
    'tell' => 'required',
    'name' => $request->input('name'),
    'email' => $request->input('email'),
    'address' => 'required',
    'gender' => 'required',
    'age' => 'required',
    'sns_kind' => 'required',
    'sns_url' => 'required',
    'sns_genre' => 'required',
  ]);
  // 保存
  $RegisterInfluencer->save();
 
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
  return redirect()->route('influencer.index');
  }
  return redirect()->back();
  }
}
