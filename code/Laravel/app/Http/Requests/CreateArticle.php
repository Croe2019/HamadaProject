<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticle extends FormRequest
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
        // バリデーションルール追加
        return [
            'title' => 'required|string|max:100',
            'blog_text' => 'required|string|max:20000',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'タイトル',
            'blog_text' => '本文',
        ];
    }

    public function message()
    {
        // バリデートエラーメッセージを表示
        // 編集したい場合、追加もここで行う

        return [
            'title.required' => 'タイトルは必須です',
            'title.max' => 'タイトルは:max文字以内で入力してください',
            'title.string' => 'タイトルは文字列で入力してください',
            'blog_text.required' => '本文は必須です',
            'blog_text.string' => '本文は文字列で入力してください',
            'blog_text.max' => '本文は:max文字列で入力してください',
        ];
    }
}
