<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendRequest extends FormRequest
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
            //
            'code_vend' => 'required',
            'name_vend' => 'required',
            'joindate_vend' => 'required',
            'code_cust' => 'required',
            'name_cust' => 'required',
            'joindate_cust' => 'required'
        ];
    }
}
