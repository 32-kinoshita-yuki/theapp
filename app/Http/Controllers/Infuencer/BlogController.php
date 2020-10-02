<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogInfluencersController extends Controller
{
     public function create(){
      return View('admin.influencer.blog.create');
}
     public function update(){
      return View('admin.influencer.blog.edit');
}
}