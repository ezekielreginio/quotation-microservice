<?php

namespace App\Http\Requests;

use App\Traits\ResponseAsJson;
use Illuminate\Foundation\Http\FormRequest;

class QuotationRequest extends FormRequest
{
    use ResponseAsJson;
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'recipient_address'=> 'required',
            'message'=> 'required',
            'fk_payment_terms'=> ['required', 'integer'],
            'validity'=> ['required', 'integer'],
            'validity_type'=> 'required'
        ];
    }
}
