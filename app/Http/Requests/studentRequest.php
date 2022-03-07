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
            'section' => 'bail|required',
            'yearlevel' => 'bail|required',
            'course' => 'bail|required',
            'schoolyear' => 'bail|required',
            'birthday' => 'bail|required',
            'goal' => 'bail|required|max:100',
            'motto' => 'bail|required|max:100',
            'awards' => 'nullable|max:100',
        ];
    }
}
