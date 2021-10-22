<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createSeoRequest extends FormRequest
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
            "title"=>"required|min:5|max:250",
            "keyword"=>"required|min:5|max:500",
            "description"=>"required|min:5|max:550",
            "author"=>"required|min:3|max:200"
        ];
    }
}
