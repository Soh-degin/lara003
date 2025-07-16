@extends('layout')
@section('content')
<form method="POST" action="{{ route('contact.confirm') }}">
    @csrf
    @method('POST')
    <hr>
    <div class="container">
        <label class="label">会社名</label>
        <div>
            <input
                name="company"
                value="{{ old('company') }}"
                type="text"
                placeholder="例）株式会社ＯＯ">
            @if ($errors->has('company'))
                <p class="error-message">{{ $errors->first('company') }}</p>
            @endif
        </div>
    </div>

    <hr>
    <div class="container">
        <label class="label">氏名</label>
        <div>
            <input
                name="name"
                value="{{ old('name') }}"
                type="text"
                placeholder="例）山田太郎">
            @if ($errors->has('name'))
                <p class="error-message">{{ $errors->first('name') }}</p>
            @endif
        </div>
    </div>

    <hr>
    <div class="container">
        <label class="label">電話番号</label>
        <div>
            <input
                name="tell"
                value="{{ old('tell') }}"
                type="text"
                placeholder="例）000-0000-0000">
            @if ($errors->has('tell'))
                <p class="error-message">{{ $errors->first('tell') }}</p>
            @endif
        </div>
    </div>

    <hr>
    <div class="container">
        <label class="label">メールアドレス</label>
        <div>
            <input
                name="email"
                value="{{ old('email') }}"
                type="text"
                placeholder="例）xxx@gmail.com">
            @if ($errors->has('email'))
                <p class="error-message">{{ $errors->first('email') }}</p>
            @endif
        </div>
    </div>
    
    <hr>
    <div class="container">
        <label class="label">タイトル</label>
        <div>
          <input
                name="title"
                value="{{ old('title') }}"
                type="text">
            @if ($errors->has('title'))
                <p class="error-message">{{ $errors->first('title') }}</p>
            @endif
        </div>    
    </div>

    <hr>
    <div class="container">
        <label class="label">お問い合わせ内容</label>
        <div>
            <textarea name="body">{{ old('body') }}</textarea>
            @if ($errors->has('body'))
                <p class="error-message">{{ $errors->first('body') }}</p>
            @endif
        </div>
    </div>

    <div class="container">
       <button class="button" type="submit">確認する</button>
    </div>
</form>
@endsection    

