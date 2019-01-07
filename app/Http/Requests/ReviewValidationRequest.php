<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'fname' => 'required|min:2|max:50',
                'lname' => 'required|min:2|max:50',
                'review' => 'required|min:2|max:1000',
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
                    'fname.required' => 'First name field is required',
                    'fname.min' => 'First name field must be greater than 2 characters',
                    'fname.max' => 'First name field may not be greater than 50 characters',
                    'lname.required' => 'Last name field is required',
                    'lname.min' => 'Last name field must be greater than 2 characters',
                    'lname.max' => 'Last name field may not be greater than 50 characters',
                    'review.required' => 'Review field is required',
                    'review.min' => 'Review field must be greater than 2 characters',
                    'review.max' => 'Review field may not be greater than 1000 characters',
            ];
        }
}
