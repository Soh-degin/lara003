@extends('layout')
@section('content')
<form method="POST" action="{{ route('contact.send') }}">
  @csrf
  @method('POST')
  <label>メールアドレス</label>
  {{ $inputs['email'] }}
  <input name="email" value="{{ $inputs['email'] }}" type="hidden">

  <label>タイトル</label>
  {{ $inputs['title'] }}
  <input name="title" value="{{ $inputs['title'] }}" type="hidden">


  <label>お問い合わせ内容</label>
  {!! nl2br(e($inputs['body'])) !!}
  <input name="body" value="{{ $inputs['body'] }}" type="hidden">

  <button type="button" onclick="history.back()">戻る</button>
  <button type="submit" name="action" value="submit">送信する</button>
</form>
@endsection