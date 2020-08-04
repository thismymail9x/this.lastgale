<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RentalStep1 extends FormRequest
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
            'house_category' => 'required',
            'house_name' => 'required',
            'room_category' => 'required'
        ];
    }
}