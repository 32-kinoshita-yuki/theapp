<?php

namespace App\Http\Controllers\Influencer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BlogInfluencer;

class BlogController extends Controller
{
  
   public function index() 
   {
     $bloginfluencer = BlogInfluencer::all(); //変数名$bloginfluencerにBlogInfluencerモデルのデータをすべて渡す
     
     return view('influencer.blog.index',
     ['bloginfluencer' => $bloginfluencer]); //bloginfluencerというキーを定義、受け取った$bloginfluencerを渡しviewに渡す
    }
  
   public function create(Request $request)
   {
      return View('influencer.blog.create');
   }
     public function update(){
     
   }
     public function edit(Request $request){
  
      
      return view('influencer.blog.edit');
   }
     
}
