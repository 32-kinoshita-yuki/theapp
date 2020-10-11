@extends('layouts.master_auth')
@extends('layouts.header')
 @section('title', 'インフルエンサープロフィール登録')
@section('content')
<form action="{{action('Influencer\ProfileController@getProfile') }}" method="post" enctype="multipart/form-data">
<div class="form-nakami">
    <h3>インフルエンサープロフィール登録</h3>
    <p class="title">こちらは依頼者も観覧するものになります</p>
 <div class="form-group row">
                        <label class="col-md-2">名前（活動名可）</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-10">
                           <label> <input type="radio" class="form-contro2" name="gender" value="{{ old('gender') }}">女性</label>
                           <label> <input type="radio" class="form-contro2" name="gender" value="{{ old('gender') }}">男性</label>
                           <label> <input type="radio" class="form-contro2" name="gender" value="{{ old('gender') }}">ジェンダーレス</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">使用するsns</label>
                        <div class="col-md-10">
                           <label><input type="checkbox"  class="form-contro2" name="sns_kind" value="{{ old('sns_kind') }}">インスタグラム</label>
                            <label><input type="checkbox"  class="form-contro2" name="sns_kind" value="{{ old('sns_kind') }}">ツイッター</label>
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
                    <div class="form-group row">
                        <label class="col-md-2">snsのジャンル</label>
                        <div class="col-md-10">
                            <label><input type="checkbox"  class="form-contro2" name="sns_genre" value="{{ old('sns_genre') }}">美容</label>
                            <label><input type="checkbox"  class="form-contro2" name="sns_genre" value="{{ old('sns_genre') }}">モデル</label>
                            <label><input type="checkbox"  class="form-contro2" name="sns_genre" value="{{ old('sns_genre') }}">グラビア</label>
                            <label><input type="checkbox"  class="form-contro2" name="sns_genre" value="{{ old('sns_genre') }}">料理</label>
                            <label><input type="checkbox"  class="form-contro2" name="sns_genre" value="{{ old('sns_genre') }}">生活</label>
                            <label><input type="checkbox"  class="form-contro" name="sns_genre" value="{{ old('sns_genre') }}">その他</label>
                        </div>
                    </div>
                    <div class="touroku">
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                    </div>
                </form>
</div>


@endsection