<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username'=>'required|max:50',
            'usertype'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:4|max:12'
        ];
    }

    public function messages()
    {
        return [
            /*'post.required'=>'Post cannot be null or empty',
            'post.max'=>'Post max length is 255 char'*/
        ];
    }
}
