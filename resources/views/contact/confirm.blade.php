@extends('layout')
@section('content')
<form method="POST" action="{{ route('contact.send') }}">
  @csrf
  @method('POST')
  <hr>
  <div class="container">
    <label>会社名：</label>
    {{ $inputs['company'] }}
    <input name="comapany" value="{{ $inputs['company'] }}" type="hidden">
  </div>

  <hr>
  <div class="container">
    <label>氏名：</label>
    {{ $inputs['name'] }}
    <input name="name" value="{{ $inputs['name'] }}" type="hidden">
  </div>

  <hr>
  <div class="container">
    <label>電話番号：</label>
    {{ $inputs['tell'] }}
    <input name="tell" value="{{ $inputs['tell'] }}" type="hidden">
  </div>

  <hr>
  <div class="container">
    <label>メールアドレス：</label>
    {{ $inputs['email'] }}
    <input name="email" value="{{ $inputs['email'] }}" type="hidden">
  </div>

  <hr>
  <div class="container">
    <label>タイトル：</label>
    {{ $inputs['title'] }}
    <input name="title" value="{{ $inputs['title'] }}" type="hidden">
  </div>

  <hr>
  <div class="container">
    <label>お問い合わせ内容：</label>
    {!! nl2br(e($inputs['body'])) !!}
    <input name="body" value="{{ $inputs['body'] }}" type="hidden">
  </div>

 <hr>
 <div class="container">   
    <button class="button" type="submit" name="action" value="submit">送信する</button>
  </div>
  <div class="container">
    <button class="button" type="button" onclick="history.back()">戻る</button>
  </div>  
</form>
@endsection