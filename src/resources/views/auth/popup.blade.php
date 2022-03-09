@extends('layouts.app')

@section('content')

<div style="padding-top: 200px; text-align: center;"><h3>新規登録完了しました。</h3></div>
<a href="{{ route('article.index') }}" class="btn" style="margin: 80px auto 30px auto; padding-top:15px; text-align: center;" >戻る</a>
<a href="{{ route('user.getLogin') }}" class="btn" style="margin: 0px auto 30px auto; padding-top:15px; text-align: center;">ログイン</a>

@endsection
