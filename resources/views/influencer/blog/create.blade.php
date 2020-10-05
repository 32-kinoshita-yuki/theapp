@extends('layouts.blog')
@section('title','ブログ投稿')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>ブログ投稿フォーム</h2>
        <form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit()"> {{-- js --}}
         @csrf
            <div class="form-group">
                <label for="title">
                    タイトル
                </label>
                <input
                    id="title"
                    name="title"
                    class="form-control"
                    value="{{ old('title') }}"
                    type="text"
                >
                @if ($errors->has('title'))
                    <div class="text-danger">
                        {{ $errors->first('title') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="body">
                    本文
                </label>
                <textarea
                    id="body"
                    name="body"
                    class="form-control"
                    rows="4"
                >{{ old('body') }}</textarea>
                @if ($errors->has('body'))  {{-- バリテーションを受け取るための処理 --}}
                    <div class="text-danger">
                        {{ $errors->first('body') }}
                    </div>
                @endif
            </div>
            <div class="mt-5">
                
                <button type="submit" class="btn btn-primary">
                    投稿する
                </button>
            </div>
        </form>
    </div>
</div>
<script>
function checkSubmit(){
if(window.confirm('送信してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection