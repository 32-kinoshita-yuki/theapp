@extends('layouts.master_auth')
 @section('title', 'インフルエンサー登録画面')

@section('content')
<div class="container">
    <div class="form-nakami">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>インフルエンサー登録画面</h2>
                <form action="{{action('Influencer\RegisterController@getRegister') }}" method="post" enctype="multipart/form-data">
                    
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
                        <label class="col-md-2">名前</label>
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
                    
              <!--<div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-10">
                           <label> <input type="radio" class="form-contro2" name="gender" value="{{ old('gender') }}">女性</label>
                           <label> <input type="radio" class="form-contro2" name="gender" value="{{ old('gender') }}">男性</label>
                           <label> <input type="radio" class="form-contro2" name="gender" value="{{ old('gender') }}">ジェンダーレス</label>
                        </div>
              </div>-->
                    
              <!--<div class="form-group row">
                        <label class="col-md-2">年齢</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="age" value="{{ old('age') }}" >
                        </div>
              </div>-->
                    
              <div class="form-group row">
                        <label class="col-md-2">使用するsns</label>
                        <div class="col-md-10">
                           <label><input type="checkbox"  class="form-contro2" name="sns_kind" value="{{ old('sns_kind') }}">インスタグラム</label>
                            <label><input type="checkbox"  class="form-contro2" name="sns_kind" value="{{ old('sns_kind') }}">ツイッター</label><br>
                            <label><input type="checkbox"  class="form-contro2" name="sns_kind" value="{{ old('sns_kind') }}">ユーチューブ</label>
                            <label><input type="checkbox"  class="form-contro2" name="sns_kind" value="{{ old('sns_kind') }}">その他</label>
                        </div>
              </div>
                    
              <div class="form-group row">
                        <label class="col-md-2">snsのurl</label>
                        <div class="col-md-10">
                           <input type="text" class="form-control" name="sns_url" value="{{ old('sns_url') }}" >
                        </div>
              </div>
                    
                    <div>
                    <div class="touroku">
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="登録">
                   </div>
                    
                    
                    
                    </form>
            </div>
        </div>
    </div><!-- form-nakami -->
    </div>
@endsection


