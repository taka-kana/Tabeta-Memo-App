<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:rfc', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '名前を入力してください。',
            'name.max' => '名前は50文字以内で入力してください。',
            'email.required' => 'E-mailアドレスを入力してください。',
            'email.email' => '正しいE-mailアドレスを入力してください。',
            'email.max' => 'E-mailアドレスは255文字以内で入力してください。',
            'email.unique' => 'そのメールアドレスは既に登録されています。',
            'password.required' => 'パスワードを入力してください。',
            'password.min' => 'パスワードは8文字以上で入力してください。',
            'password.confirmed' => '入力されたパスワードが一致しません。',
            'password.string' => 'パスワードは文字列にて入力してください。',

        ];
    }
}
