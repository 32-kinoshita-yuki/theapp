@extends('layouts.blog')
@section('title','ブログ一覧')
@section('content')

  <div class="row">
  <div class="col-md-8 col-md-offset-2">
      <h2>ブログ記事一覧</h2>
      <table class="table table-striped">
          <tr>
              <th>記事番号</th>
              <th>タイトル</th>
              <th>日付</th>
              <th>内容</th>
          </tr>
          @foreach($bloginfluencer as $blogInfluencer)
          <tr>
              <td>{{ $bloginfluencer->id }}</td>
              <td><a href="/blog/{{ $bloginfluencer->id }}"{{ $bloginfluencer->title }}</a></td>
              <td>{{ $bloginfluencer->body }}</td>
          </tr>
          @endforeach
      </table>
  </div>
</div>

@endsection
   