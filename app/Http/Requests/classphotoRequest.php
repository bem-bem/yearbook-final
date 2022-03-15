<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class classphotoRequest extends FormRequest
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
            'image' => 'bail|image|required_unless:has_image,check',
            'section' => 'required|max:30',
            'yearlevel' => 'required|max:30',
            'course' => 'nullable|max:30',
            'schoolyear' => 'bail|required|max:9',
        ];
    }
}
