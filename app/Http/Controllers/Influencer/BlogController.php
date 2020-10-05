<?php

namespace App\Http\Controllers\Influencer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BlogInfluencer;
use App\Http\Requests\BlogRequet;
class BlogController extends Controller
{
  
   public function index() //blog一覧
   {
     $bloginfluencer = BlogInfluencer::all(); //変数名$bloginfluencerにBlogInfluencerモデルのデータをすべて渡す
     
     return view('influencer.blog.index',
     ['bloginfluencer' => $bloginfluencer]); //bloginfluencerというキーを定義、受け取った$bloginfluencerを渡しviewに渡す
    }
  
   public function showCreate() //blog登録画面　表示
   {
      return View('influencer.blog.create');
   }
   
   
   public function exeStore(BlogRequet $request) //blogを登録する
   {
       //ブログのデータを受け取る
       $inputs = $request->all();
       //ブログを登録
       BlogInfluencer::create($inputs);
       \Session::flash('err_msg', 'ブログを登録しました');
      return redirect(route('influencer.blog.index'));
   }
  
  
   public function edit(Request $request)
   {
  
      
      return view('influencer.blog.edit');
   }
     
}
