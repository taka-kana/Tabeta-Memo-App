@extends('layouts.app')

@section('content')
<section class="create">
    <div class="container">
        <h3 class="create-title ">レシピ投稿</h3>
        <div class="create-form-wrapper">

            <!--form-->
            <form action="{{ route('postCreate') }}" method="POST" name="create-form" enctype="multipart/form-data">
                @csrf
                <div class="create-alert"><span class="alert">*&nbsp;</span> &nbsp; は入力必須項目です</div>

                <!-- レシピ名 -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title ">レシピ名<span class="alert">&nbsp;*</span></div>
                    <div class="form_area-wrapper">
                        <input type="text" name="title" class="form_input" value="{{ old('title') }}">
                        <p class="create-form-item">50文字以内で入力してください。</p>
                        @error('title')
                        <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- 画像 -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">画像</div>
                    <div class="form_area-wrapper">
                        <input type="file" name="image" class="form_input">
                        <p class="create-form-item">PNG/JPEG/JPG/GIFのみアップロード可能です。</p>
                        @error('image')
                        <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                    
                <!-- レシピメモ -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">メモ<span class="alert">&nbsp;*</span></div>
                        <div class="form_area-wrapper">
                            <textarea class="create-form_summary" name="summary" id="summary" cols="30" rows="10" value="{{ old('summary') }}"></textarea>
                            <p class="create-form-item">30文字以上で入力してください。</p>
                            @error('summary')
                            <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ $message }}</p>
                            @enderror
                        </div>
                </div>

                <!-- カテゴリー -->
                <div class="form_area wow fadeInDown">
                <div class="form_item-title ">カテゴリー名<span class="alert">&nbsp;*</span></div>
            <div class="create-radio_wrapper">
                <div class="radio_item-wrapper">
                    <label>
                        <input type="radio" name="category_id" class="form_select" value="1"><span>普段メニュー</span>
                    </label>
                    <label>
                        <input type="radio" name="category_id" class="form_select" value="2"><span>子供OK</span>
                    </label>
                    <label>
                        <input type="radio" name="category_id" class="form_select" value="3"><span>スイーツ</span>
                    </label>
                </div>

                <div class="radio_item-wrapper">
                    <label>
                        <input type="radio" name="category_id" class="form_select" value="4"><span>離乳食</span>
                    </label>
                    <label>
                        <input type="radio" name="category_id" class="form_select" value="5"><span>お弁当</span>
                    </label>
                    <label>
                        <input type="radio" name="category_id" class="form_select" value="6"><span>特別</span>
                    </label>
                    @error('category_id')
                    <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ $message }}</p>
                    @enderror
                </div>
            </div>
           </div>

                <!-- 食材キーワード -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">食材キーワード<span class="alert">&nbsp;*</span></div>
                    <div class="form_area-wrapper">
                        <input type="text" name="keywords" class="form_input" value="{{ old('keywords') }}">
                        <p class="create-form-item">8文字以内で入力してください。</p>
                        @error('keywords')
                        <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <!-- わが家のレビュー -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title ">我が家のレビュー<span class="alert">&nbsp;*</span></div>
                    <div class="create-form_reaction-area-wrapper">
                        <div class="create-radio_wrapper">
                            <label>
                                <input type="radio" name="revue_id" value="1" class="form_reaction-select"><span><i class="far fa-grimace reaction-icon" ></i>あんまり…。</span>
                            </label>
                            <label>
                                <input type="radio" name="revue_id" value="2" class="form_reaction-select" checked><span><i class="far fa-smile reaction-icon"></i>まずまず</span>
                            </label>
                            <label>
                                <input type="radio" name="revue_id" value="3" class="form_reaction-select"><span><i class="far fa-kiss-wink-heart reaction-icon"></i>好評!!</span>
                            </label>
                            @error('revue')
                            <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- 送信 -->
                <div class="create-form_sent-area-wrapper wow fadeInDown">
                    <input type="submit" value="投稿する" class="btn" id="js-submit" >
                    <input type="submit" value="戻る" class="create-form_back btn" id="" >
                </div>

            </form>
        </div>



    </div>
</section>

@endsection