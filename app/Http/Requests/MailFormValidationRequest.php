<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MailFormValidationRequest extends Request
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
                'contactFormName' => 'required|min:2|max:25',
                'contactFormEmail' => 'required|email',
                'contactFormMessage' => 'required',
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
                'contactFormName.required' => 'Name field is required',
                'contactFormName.min' => 'Name field must be greater than 2 characters',
                'contactFormName.max' => 'Name field may not be greater than 25 characters',
                'contactFormEmail.required' => 'Email field is required',
                'contactFormEmail.email' => 'Enter a valid email',
                'contactFormMessage.required' => 'Message field is required',
        ];
    }
}
