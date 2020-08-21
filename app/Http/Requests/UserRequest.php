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
            'first_name' => 'alpha|min:2|max:20',
            'last_name'  => 'alpha|min:2|max:30',
            'birth'      => 'date|before:yesterday',
            'about'      => 'max:500',
        ];
    }
}
