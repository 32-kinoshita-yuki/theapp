<?php

namespace App\Http\Controllers\Influencer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function getProfile(Request $request)
    {
        return view('influencer.profile.profile');
    }
     public function create(Request $request)
    {
       // Validation
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
       return redirect('influencer/profile/create');
    }
    
     public function edit(Request $request)
  {
     return view('influencer.profile.edit');
  }
     public function update(Request $request)
  {
      return redirect('admin/profile/edit?id=');
 }
// リダイレクト
  //return redirect()->route('index');
//}
//public function index(){
//  return view('index');
 
}
