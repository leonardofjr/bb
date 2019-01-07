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
                'description' => 'required|min:25|max:125',
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
                'description.required' => 'Deescription field is required',
                'description..min' => 'Description field must be greater than 25 characters',
                'description..max' => 'Description field may not be greater than 125 characters',
        ];
    }
}
