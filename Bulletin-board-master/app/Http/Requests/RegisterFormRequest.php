<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
            'username' => 'required|string|max:30',
            'mail' => 'required|max:100|email|unique:users,email',
            'password' => 'required|confirmed|between:8,30',
        ];
    }

    public function messages(){

       return [
            'username.required' => '必須項目です。',
            'username.max' => '30字以内で入力して下さい。',
            'username.string' => '文字を入力して下さい。',
            'mail.required' => '必須項目です。',
            'mail.max' => '100字以内で入力して下さい。',
            'mail.email' => '有効なアドレスを入力して下さい。',
            'mail.unique' => 'このアドレスは既に使われています。',
            'password.required' => '必須項目です。',
            'password.confirmed' => 'パスワードが一致しません。',
            'password.between' => '8〜30の間で入力して下さい。',
        ];
    }
}
