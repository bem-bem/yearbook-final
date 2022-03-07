<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class facultyRequest extends FormRequest
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
            'job' => 'bail|required|max:20',
            'job_description' => 'bail|max:50|nullable',
            'schoolyear' => 'bail|required'
        ];
    }
}
