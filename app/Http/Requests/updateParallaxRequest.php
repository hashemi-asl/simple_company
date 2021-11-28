<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateParallaxRequest extends FormRequest
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
            "title"=>'required|max:100',
            "title_size"=>'required',
            "title_color"=>'required',
            "body"=>'required|max:1000',
            "body_size"=>'required',
            "body_color"=>'required',
            'image'=>'mimes:jpg,png|image'
        ];
    }
}
