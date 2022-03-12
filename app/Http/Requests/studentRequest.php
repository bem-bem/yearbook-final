<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class studentRequest extends FormRequest
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
            'name' => 'bail|required|max:40',
            'image' => 'bail|image|required_unless:has_image,check',
            'section' => 'required',
            'yearlevel' => 'required',
            'course' => 'nullable',
            'schoolyear' => 'bail|required|max:9',
            'birthday' => 'nullable',
            'goal' => 'nullable|max:150',
            'motto' => 'nullable|max:150',
            'awards' => 'nullable|max:100',
        ];
    }
}