<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::user()->role == 'admin') return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'alpha|min:2|max:20|nullable',
            'last_name'  => 'alpha|min:2|max:30|nullable',
            'birth'      => 'date|before:yesterday|nullable',
            'about'      => 'max:500',
            'avatar'     => 'image|nullable',
            'avatar_form'=> ['regex:/(circle|square)/'],
        ];
    }
}
