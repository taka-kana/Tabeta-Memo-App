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
                'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif','file'],
                'summary' => ['required', 'string', 'min:30'],
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
            'image.required' => '写真ファイルを選択してください。',
            'image.image' => '指定されたファイルは画像ファイルではありません。',
            'image.mines' => '指定された拡張子（PNG/JPG/GIF）ではありません。',
            'summary.required' => 'メモを記入してください。',
            'summary.min' => '30字以上で入力してください。',
            'category_id.min' => 'カテゴリーが選択されていません。',
            'keywords.min' => 'キーワードは8文字以内で入力してください。',
            'keywords.required' => 'キーワードが入力されていません。',
            'revue_id.required' => 'キーワードが入力されていません。',




        ];
    }
}
