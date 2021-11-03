<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createParallaxReauest extends FormRequest
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
            "title"=>'required',
            "title_size"=>'required',
            "title_color"=>'required',
            "body"=>'required',
            "body_size"=>'required',
            "body_color"=>'required',
            'image'=>'required|mimes:jpg,png'
        ];
    }
}
