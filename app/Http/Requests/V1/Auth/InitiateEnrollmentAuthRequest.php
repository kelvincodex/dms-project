<?php

namespace App\Http\Requests\V1\Auth;

use Illuminate\Foundation\Http\FormRequest;

class InitiateEnrollmentAuthRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "userFirstName"=>['required', 'max:255', 'string'],
            "userLastName"=>['required', 'max:255', 'string'],
            "userRoleId"=>['required'],
            "userOfficeId"=>['required'],
            "userEmail"=>['required','email', 'max:255'],
            "userPassword"=>['required','confirmed', 'max:255'],
        ];
    }
}
