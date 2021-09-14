<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CuestomerUpdateValidate extends FormRequest
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
        $cuestomer=$this->route('cuestomer');
        return [
            'name'=>'string|required|max:50',
            'lastname'=>'string|required|max:50',
            'dni'=>'numeric|required|unique:cuestomers,dni,'.$cuestomer->dni,
            'telephone'=>'string|required|max:50',
            'email'=>'email|required',
        ];
    }
}
