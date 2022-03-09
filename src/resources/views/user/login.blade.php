@extends('layouts.app')

@section('content')

<section class="login">
    <div class="container">
        <h3 class="login-title title">ログイン</h3>

        @if(count($errors) >0)
        <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
        </div>
        @endif

        <div class="login-form-wrapper">
            <form action="{{ route('user.postLogin') }}" method="POST" name="login-form" id="">
                @csrf
                <!-- メールアドレス -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">メールアドレス</div>
                    <input type="email" name="email" id="email"  class="login-form_email form_input">
                </div>
                <!-- パスワード -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">パスワード</div>
                        <input type="password" name="password" id="password" class="login-form_pass form_input">
                    </div>
                <!-- 送信 -->
                <div class="login-form_sent-area wow fadeInDown">
                    <input type="submit" value="ログイン" class="btn" id="" >
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

