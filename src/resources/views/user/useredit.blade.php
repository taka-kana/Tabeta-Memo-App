@extends('layouts.app')

@section('content')

<section class="useredit">
    <div class="container">
        <h3 class="useredit-title title">ユーザー情報変更</h3>

        <div class="useredit-form-wrapper">

            @if (count($errors) > 0)
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        @endif
        
            <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST" name="useredit-form" id="">
                @method('PUT')
                @csrf
                <!-- ユーザー名 -->
                @if (Auth::id() == 1)
                <p class="text-danger">*ゲストユーザーは変更できません</p>
                @endif
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">ユーザー名</div>
                    <div class="form_area-wrapper">
                        @if (Auth::id() == 1)
                        <input type="text" name="name" class="form_input" value="{{ $user->name }}" readonly>
                        @else
                        <input type="text" name="name" class="form_input" value="{{ $user->name }}">
                        @endif
                        <p class="create-form-item">50文字以内で入力してください。</p>
                        @error('name')
                        <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <!-- メールアドレス -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">メールアドレス</div>
                    <div class="form_area-wrapper">
                        @if (Auth::id() == 1)
                        <input type="email" name="email" class="form_input" value="{{ $user->email }}" readonly>
                        @else
                        <input type="email" name="email" class="form_input" value="{{ $user->email }}">
                        @endif
                        <p class="create-form-item">50文字以内で入力してください。</p>
                        @error('email')
                        <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <!-- パスワード -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">パスワード</div>
                    <div class="form_area-wrapper">
                        <p class="useredit-pass-item">パスワードは変更できません。</p>
                    </div>
                </div>

                <!-- 送信 -->
                <div class="useredit-btn-wrapper wow fadeInDown">
                    <div class="useredit-form_sent-area">
                        @if(Auth::id() !== 1)
                        <input type="submit" value="変更する" class="useredit-form_sent" >
                        @endif
                    </div>
                    <a href="{{ route('user.mypage') }}" class="useredit-btn-area">
                        <div class="useredit-back-btn">戻る</div>
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection