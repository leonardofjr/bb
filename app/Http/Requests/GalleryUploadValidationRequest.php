<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GalleryUploadValidationRequest extends Request
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
                'description' => 'required|min:2|max:25',
                'tags' => 'required',
                'image' => 'required',
        ];
    }

    /**
     * Overwriting messages method.
     *
     * @return array
     */
    public function messages()
    {


        return [
                'description.required' => 'Alternate text field is required',
                'description..min' => 'Alternate text field must be greater than 2 characters',
                'description..max' => 'Alternate text field may not be greater than 25 characters',
        ];
    }
}
