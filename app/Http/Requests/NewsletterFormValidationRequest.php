<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NewsletterFormValidationRequest extends Request
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
                'newsletterFormName' => 'required|min:2|max:25',
                'newsletterFormEmail' => 'required|email',
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
                'newsletterFormName.required' => 'Name field is required',
                'newsletterFormName.min' => 'Name field must be greater than 2 characters',
                'newsletterFormName.max' => 'Name field may not be greater than 25 characters',
                'nwesletterFormEmail.required' => 'Email field is required',
                'newsletterFormEmail.email' => 'Enter a valid email',
        ];
    }
}
