@extends('layout')
@section('content')
<form method="POST" action="{{ route('contact.confirm') }}">
    @csrf
    @method('POST')
    <hr>
    <div class="container">
        <label class="label">メールアドレス</label>
        <input
            name="email"
            value="{{ old('email') }}"
            type="text"
            placeholder="例）xxx@gmail.com">
        @if ($errors->has('email'))
            <p class="error-message">{{ $errors->first('email') }}</p>
        @endif
    </div>
    
    <hr>
    <div class="container">
        <label class="label">タイトル</label>
        <input
            name="title"
            value="{{ old('title') }}"
            type="text">
        @if ($errors->has('title'))
            <p class="error-message">{{ $errors->first('title') }}</p>
        @endif
    </div>

    <hr>
    <div class="container">
        <label class="label">お問い合わせ内容</label>
        <textarea name="body">{{ old('body') }}</textarea>
        @if ($errors->has('body'))
            <p class="error-message">{{ $errors->first('body') }}</p>
        @endif
    </div>

    <div class="container">
       <button class="button" type="submit">確認する</button>
    </div>
</form>
@endsection    

