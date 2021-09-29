<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoxValidate extends FormRequest
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

            'status'=>'required|string|max:20',
            'amount'=>'required|numeric',
            'notes'=>'required|string|max:200',
            'user_id'=>'required|numeric',
        ];
    }
}
