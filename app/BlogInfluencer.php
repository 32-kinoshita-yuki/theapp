<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogInfluencer extends Model
{
    //テーブル名
    protected $table = 'blog_influencers';
    //可変項目
    protected $fillable =
    [
      'title',
      'body'
      
    ];
}
