<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AmenRequest extends FormRequest
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
            'day' => 'required|integer',
            'from' => 'required|string',
            'to' => 'required|string',
            'period' => 'required|string',
            'month' => 'required|string'
        ];
    }
}
