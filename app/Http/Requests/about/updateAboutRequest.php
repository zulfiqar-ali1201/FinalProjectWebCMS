<?php

namespace App\Http\Requests\about;

use Illuminate\Foundation\Http\FormRequest;

class updateAboutRequest extends FormRequest
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

            'title'=>'required|unique:abouts',
            'category'=>'required',
            'description'=>'required',
            'image'=>'nullable',
            'sort'=>'required|unique:abouts'
        ];
    }
}
