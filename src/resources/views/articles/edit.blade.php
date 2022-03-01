@extends('layouts.app')

@section('content')

<section class="edit">
    <div class="container">
        <h3 class="edit-title">レシピ編集</h3>
        <div class="edit-form-wrapper">

            <!--form-->
            <form action="{{ route('update', ['id' => $article->id]) }}" method="POST" name="edit-form" enctype="multipart/form-data">
                @csrf
                <div class="edit-alert"><span class="alert">*&nbsp;</span> &nbsp; は入力必須項目です</div>

                <!-- レシピ名 -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">レシピ名<span class="alert">&nbsp;*</span></div>
                    <div class="form_area-wrapper">
                        <input type="text" name="title" class="form_input" value="{{ $article->title }}">
                        <p class="edit-form-item">50文字以内で入力してください。</p>
                        @error('title')
                        <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- 画像 -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">画像<span class="alert">&nbsp;*</span></div>
                    <div class="form_area-wrapper">
                        <input type="file" name="image" class="form_input">
                        <p class="edit-form-item">PNG/JPEG/JPG/GIFのみアップロード可能です。</p>
                        @error('image')
                        <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                    
                <!-- レシピメモ -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">メモ<span class="alert">&nbsp;*</span></div>
                        <div class="form_area-wrapper">
                            <textarea class="edit-form_summary" name="summary" cols="30" rows="10" value="{{ old('summary') }}">{{ $article->summary }}</textarea>
                            <p class="edit-form-item">30文字以上で入力してください。</p>
                            @error('summary')
                            <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ $message }}</p>
                            @enderror
                        </div>
                </div>

                <!-- カテゴリー -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">カテゴリー名<span class="alert">&nbsp;*</span></div>
                    <div class="edit-radio_wrapper">
                        <div class="radio_item-wrapper">
                            <label>
                                <input type="radio" name="category_id" value="1" class="form_select"<?php if($article->category_id == "1") {print "checked";}?>><span>普段メニュー</span>
                            </label>
                            <label>
                                <input type="radio" name="category_id" value="2" class="form_select"<?php if($article->category_id == "2") {print "checked";}?>><span>子供OK</span>
                            </label>
                            <label>
                                <input type="radio" name="category_id" value="3" class="form_select"<?php if($article->category_id == "3") {print "checked";}?>><span>スイーツ</span>
                            </label>
                        </div>

                        <div class="radio_item-wrapper">
                            <label>
                                <input type="radio" name="category_id" value="4" class="form_select"<?php if($article->category_id == "4") {print "checked";}?>><span>離乳食</span>
                            </label>
                            <label>
                                <input type="radio" name="category_id" value="5" class="form_select"<?php if($article->category_id == "5") {print "checked";}?>><span>お弁当</span>
                            </label>
                            <label>
                            <input type="radio" name="category_id" value="6" class="form_select"<?php if($article->category_id == "6") {print "checked";}?>><span>特別</span>
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
                    <div class="edit-form_article-keyword-area-wrapper">
                        <input type="text" name="keywords" class="form_input" value="{{ $article->keyword->name }}">
                        <p class="create-form-item">30文字以内で入力してください。</p>
                        @error('keywords')
                        <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <!-- わが家のレビュー -->
                <div class="form_area wow fadeInDown">
                    
                    <div class="form_item-title">我が家のレビュー<span class="alert">&nbsp;*</span></div>
                    <div class="edit-form_reaction-area-wrapper">
                        <div class="edit-radio_wrapper">
                            <label>
                                <input type="radio" name="revue_id" value="1" class="form_reaction-select"<?php if($article->revue_id == "1") {print "checked";}?>><span><i class="far fa-grimace reaction-icon" ></i>あんまり…。</span>
                            </label>
                            <label>
                                <input type="radio" name="revue_id" value="2" class="form_reaction-select" checked><span><i class="far fa-smile reaction-icon"<?php if($article->revue_id == "2") {print "checked";}?>></i>まずまず</span>
                            </label>
                            <label>
                                <input type="radio" name="revue_id" value="3" class="form_reaction-select"<?php if($article->revue_id == "3") {print "checked";}?>><span><i class="far fa-kiss-wink-heart reaction-icon"></i>好評!!</span>
                            </label>
                    @error('revue')
                    <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ $message }}</p>
                    @enderror
                        </div>
                    </div>
                </div>

                <!-- 完食度 -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title ">完食度<span class="alert">&nbsp;*</span></div>
                    <div class="rating-graph_wrapper">
                        <div class="rating-graph_axis">
                            <input type="radio" name="rating" value="" <?php if($article->rating == "") {print "checked";}?> style="display: none">
                            <label>
                                <input type="radio" class="rating-graph_scale" name="rating" value="0%" <?php if($article->rating == "0%") {print "checked";}?>><span class="rating-graph_scale_item">0%</span>
                            </label>
                            <label>
                                <input type="radio" class="rating-graph_scale" name="rating" value="25%" <?php if($article->rating == "25%") {print "checked";}?>><span class="rating-graph_scale_item">25%</span>
                            </label>
                            <label>
                                <input type="radio" class="rating-graph_scale" name="rating" value="50%" <?php if($article->rating == "50%") {print "checked";}?>><span class="rating-graph_scale_item">50%</span>
                            </label>
                            <label>
                                <input type="radio" class="rating-graph_scale" name="rating" value="75%" <?php if($article->rating == "75%") {print "checked";}?>><span class="rating-graph_scale_item">75%</span>
                            </label>
                            <label>
                                <input type="radio" class="rating-graph_scale" name="rating" value="100%" <?php if($article->rating == "100%") {print "checked";}?>><span class="rating-graph_scale_item">100%</span>
                            </label>
                        </div>
                        <div class="rating-graph_basis">完食</div>
                    </div>
                </div>
                    <!-- 公開非公開 -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title ">公開・非公開<span class="alert">&nbsp;*</span></div>
                <div class="create-radio_wrapper">
                    <div class="radio_item-wrapper">
                        <label>
                            <input type="radio" name="release" value="公開する" class="form_select" <?php if($article->release == "公開する") {print "checked";}?>><span>公開する</span>
                        </label>
                        <label>
                            <input type="radio" name="release" value="公開しない" class="form_select" <?php if($article->release == "公開しない") {print "checked";}?>><span>公開しない</span>
                        </label>
                        <p class="create-form-item" style="margin-top: 10px"><span class="alert">&nbsp;*</span>&nbsp;&nbsp;&nbsp;&nbsp;公開にすると みんなの記録 に表示されます。</p>
                        @error('release')
                        <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;{{ $message }}</p>
                        @enderror
                    </div>
                </div>
               </div>
                <!-- 送信 -->
                <div class="edit-form_sent-area-wrapper wow fadeInDown">
                    <input type="submit" value="変更する" class="btn" id="js-submit" >
                    <input type="submit" value="戻る" class="edit-form_back btn" id="" >
                </div>
            </form>
        </div>



    </div>
</section>

@endsection