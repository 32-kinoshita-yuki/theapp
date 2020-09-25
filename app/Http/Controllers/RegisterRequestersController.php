<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegisterRequester;
use Auth;

class RegisterRequestersController extends Controller
{
    public function getRegister(){
      return View('requester.register');
  }
  
  public function postRegister(Request $request){
  // バリデーション
  $this->validate($request,[
    'password' => 'required|min:4',
    'tell' => '',
    'name' => 'required',
    'email' => 'required',
    'address' => '',
    'name_company' => '',
    'url_company' => '',
    'url_pr' => '',
    'body' => '',
  ]);
 
  $registerrequester = new Registerrequester([
    'password' =>bcrypt($request->input('password')),
    'tell' => '',
    'name' => $request->input('name'),
    'email' => $request->input('email'),
    'address' => '',
    'name_company' => '',
    'url_company' => '',
    'url_pr' => '',
    'body' => '',
  ]);
 
  // 保存
   $registerrequester->save();
 
  // リダイレクト
  return redirect()->route('requester.complete');
}
//依頼者新規登録完了画面view
public function requesterComplete(){
  return view('requester.complete');
}
//依頼者ログイン画面view
public function getLogin(){
  return view('requester.login');
  }
  //依頼者ログイン処理
  public function postLogin(Request $request)
  {
  $this->validate($request,[
  'email' => 'email|required',
  'password' => 'required|min:4'
  ]);
 
  if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
  return redirect()->route('requester.index');
  }
  return redirect()->back();
  }
  //index
   public function index(Request $request)
  {
  return view('requester.index');
}
}
