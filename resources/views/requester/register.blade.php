@extends('layouts.master_auth')
 @section('title', '依頼者 登録画面')

@section('content')
<div class="container">
     <div class="form-nakami">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>依頼者 登録画面</h2>
                <form action="{{ action('RegisterRequestersController@getRegister') }}" method="post" enctype="multipart/form-data">
                    
              <div class="form-group row">
                        <label class="col-md-2">ID</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="id" value="{{ old('id') }}">
                        </div>
                    </div>
                    
              <div class="form-group row">
                        <label class="col-md-2">パスワード</label>
                        <p>4文字以上</p>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="password" value="{{ old('password') }}">
                        </div>
                    </div>
                    
               <div class="form-group row">
                        <label class="col-md-2">電話番号</label>
                        <div class="col-md-10">
                            <input type="tel"  pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" class="form-control" name="tell" value="{{ old('tell') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">メールアドレス</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                    </div> 
                    
               <div class="form-group row">
                        <label class="col-md-2">担当者名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">住所</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                        </div>
                    </div>
                    
                <div class="form-group row">
                        <label class="col-md-2">会社名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name_company" value="{{ old('name_company') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">会社のURL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="url_company" value="{{ old('url_company') }}" >
                        </div>
                    </div>
                    
                     <div class="form-group row">
                        <label class="col-md-2">PR商品やサービスのURL</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="url_pr" value="{{ old('url_pr') }}" >
                        </div>
                    </div>
                    
                     <div class="form-group row">
                        <label class="col-md-2">PR商品やサービスの説明</label>
                        <div class="col-md-10">
                           <textarea  class="form-control" name="body" >{{ old('body') }}" </textarea>
                        </div>
                    </div><!-- form-nakami -->
                    </div>
                   
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="登録">
                    </form>
@endsection