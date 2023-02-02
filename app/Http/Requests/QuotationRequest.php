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
            'id'=> ['integer', 'exists:quotations,id'],
            'recipient_address'=> 'required',
            'message'=> 'required',
            'fk_payment_terms'=> ['required', 'integer'],
            'validity'=> ['required', 'integer'],
            'validity_type'=> 'required'
        ];
    }
    
    /**
     * Add route parameters to validation data
     * 
     * @param  array|mixed|null $keys
     * 
     * @return array
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     */
    public function all($keys = null) 
    {
        return array_merge(parent::all(), $this->route()->parameters());
    }
}
