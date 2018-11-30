<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseRequest extends FormRequest
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
            'code_trans' => 'required',
            'name_trans' => 'required',
            'prod_trans' => 'required',
            'vend_trans' => 'required',
            'qty_trans' => 'required|numeric',
            'date_trans' => 'required',
        ];
    }
}
