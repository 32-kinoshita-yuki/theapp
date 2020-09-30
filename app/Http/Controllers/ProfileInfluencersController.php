<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProfileInfluencer;//モデル
use Auth;


class ProfileInfluencersController extends Controller
{
    public function getProfile()
    {
        return view('admin.influencer.profile');
    }
    public function postProfile(Request $request){
  // バリデーション
  $this->validate($request,[
    'image_path' => '', 
    'name' => 'required',
    'gender' => '',
    'age' => '',
    'sns_kind' => '',
    'sns_url' => '',
    'sns_genre' => '',
  ]);
  
  $profileinfluencer = new Profileinfluencer([//DBに登録するための準備　登録する値を設定
   'image_path' => '',
    'name' => $request->input('name'),
    'gender' => '',
    'age' => '',
    'sns_kind' => '',
    'sns_url' => '',
    'sns_genre' => '',
  ]);
  
  // 保存
  $profileinfluencer->save();

// リダイレクト
  return redirect()->route('index');
}
public function index(){
  return view('index');
}
}