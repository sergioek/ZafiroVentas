<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleValidate extends FormRequest
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
            'items'=>'required|numeric|',
            'cash'=>'required|numeric|',
            'debt'=>'required|numeric|',
            'status'=>'required|string|max:20',
            'notes'=>'max:300',
            'cuestomer_id'=>'required|numeric',
        ];
    }
}
