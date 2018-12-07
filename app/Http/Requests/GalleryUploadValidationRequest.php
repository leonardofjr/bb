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
                'gallery-filename-alternate-text' => 'required|min:2|max:25',
                'gallery-categories' => 'required',
                'gallery-file' => 'required',
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
                'gallery-filename-alternate-text.required' => 'Alternate text field is required',
                'gallery-filename-alternate-text..min' => 'Alternate text field must be greater than 2 characters',
                'gallery-filename-alternate-text..max' => 'Alternate text field may not be greater than 25 characters',
        ];
    }
}
