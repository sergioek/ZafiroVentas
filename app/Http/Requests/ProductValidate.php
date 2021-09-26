<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductValidate extends FormRequest
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
            'name'=>'required|max:100',
            'mark_id'=>'required|numeric',
            'category_id'=>'required|numeric',
            'brcode'=>'required|max:100',
            'cost'=>'required|numeric|min:1',
            'price'=>'required|numeric|min:1',
            'stock'=>'required|numeric|min:0',
            'alerts'=>'required|numeric|min:0',
            'image'=>'image|max:4000',
            'waist_id'=>'required|max:40',
            'color'=>'required',

        ];
    }
}
