<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CuestomerValidate extends FormRequest
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
            'name'=>'string|required|max:50',
            'lastname'=>'string|required|max:50',
            'dni'=>'numeric|required|unique:cuestomers',
            'telephone'=>'string|required|max:50',
            'email'=>'email|required',
        ];
    }
}
