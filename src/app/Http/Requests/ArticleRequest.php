<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'title' => ['required', 'string', 'max:50'],
                'summary' => ['required', 'string', 'min:30'],
                'image' => ['image', 'mimes:jpeg,png,jpg,gif','file'],
                'rating' => ['required'],
                'release' => ['required'],
                'category_id' => ['required'],
                'keywords' => ['required', 'string', 'max:8'],
                'revue_id' => ['required'],

        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'タイトルを入力してください。',
            'title.max' => 'タイトルは50文字以内で入力してください。',
            'image.image' => '指定されたファイルは画像ファイルではありません。',
            'image.mines' => '指定された拡張子（PNG/JPG/GIF）ではありません。',
            'summary.required' => 'メモが記載されていません。',
            'summary.min' => '30字以上で入力してください。',
            'release.required' => '公開・非公開設定が選択されていません。',
            'rating.required' => '完食度が選択されていません。',
            'category_id.required' => 'カテゴリーが選択されていません。',
            'keywords.min' => 'キーワードは8文字以内で入力してください。',
            'keywords.required' => 'キーワードが入力されていません。',
            'revue_id.required' => 'キーワードが入力されていません。',
        ];
    }
}
