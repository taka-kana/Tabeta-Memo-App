@extends('layouts.app')

@section('content')
<section class="register">
    <div class="container">
        <h3 class="register-title title">新規登録</h3>

        <div class="register-form-wrapper">
            <form method="post" action="/register">
                @csrf
                <div class="register-alert"><span>*</span>&nbsp; は入力必須項目です</div>

                <!-- ユーザー名 -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">ユーザー名<span>&nbsp; *</span></div>
                    <div class="form_area-wrapper">
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form_input @if($errors->has('name')) is-validated @endif">
                        <p class="create-form-item">50文字以内で入力してください。</p>
                        @error('name')
                        <p class="validation-alert"><i class="fas fa-exclamation-triangle"> {{ $message }} </i>&nbsp;&nbsp;</p>
                        @enderror
                    </div>
                </div>
                <!-- メールアドレス -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">メールアドレス<span>&nbsp; *</span></div>
                    <div class="form_area-wrapper">
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form_input @if($errors->has('email')) is-validated @endif">
                        <p class="create-form-item">50文字以内で入力してください。</p>
                        @error('email')
                        <p class="validation-alert"><i class="fas fa-exclamation-triangle"> {{ $message }} </i>&nbsp;&nbsp;</p>
                        @enderror
                    </div>
                </div>
                <!-- パスワード -->
                <div class="form_area wow fadeInDown">
                   <div class="form_item-title">パスワード<span>&nbsp; *</span></div>
                    <div class="form_area-wrapper">
                        <input type="password" name="password" id="password" value="{{ old('password') }}" class="form_input @if($errors->has('password')) is-validated @endif">
                        <p class="create-form-item">半角英数8文字以上で入力してください。</p>
                        @error('password')
                        <p class="validation-alert"><i class="fas fa-exclamation-triangle"> {{ $message }} </i>&nbsp;&nbsp;</p>
                        @enderror
                    </div>
                </div>
                <!-- 確認用パスワード -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">パスワード(確認)<span> *</span></div>
                    <div class="form_area-wrapper">
                        <input id="password_confirmation" type="password" name="password_confirmation"  class="form_input">
                        <p class="create-form-item">半角英数8文字以上で入力してください。</p>

                    </div>
                </div>
                <!-- 送信 -->
                <div class="register-form_sent-area wow fadeInDown">
                    <input type="submit" value="登録" class="btn" >
                </div>
            </form>
        </div>
    </div>
</section>

@endsection