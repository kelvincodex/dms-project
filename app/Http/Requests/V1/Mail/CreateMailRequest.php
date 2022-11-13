<?php

namespace App\Http\Requests\V1\Mail;

use Illuminate\Foundation\Http\FormRequest;

class CreateMailRequest extends FormRequest
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
            "mailOwnerName"=>['required', 'max:255', 'string'],
            "mailTitle"=>['required', 'max:255', 'string'],
            "mailOfficeId"=>['required'],
        ];
    }
}
