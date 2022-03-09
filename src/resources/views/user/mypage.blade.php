@extends('layouts.app')

@section('content')
<section class="mypage">
    <div class="container">
        <h3 class="mypage-title title">ユーザー</h3>
        <div class="mypage-item-wrapper">
            <!-- 名前 -->
            <div class="mypage_name-area wow fadeInDown">
                <div class="mypage_item-title">ユーザー名</div>
                <div class="mypage_name">{{ Auth::user()->name }}</div>
            </div>
            <!-- メールアドレス -->
            <div class="mypage_email-area wow fadeInDown">
                <div class="mypage_item-title">メールアドレス</div>
                <div class="mypage_email">{{ Auth::user()->email }}</div>
            </div>
            <!-- 送信 -->
            <div class="mypage_btn-area wow fadeInDown">
                <a href="{{ route('article.index') }}" class="mypage-back-btn">戻る</a>
                <a href="{{ route('user.edit', auth()->user()->id) }}" class="mypage-edit-btn">編集</a>
                
            </div>
        </div>
    </div>
</section>

@endsection




