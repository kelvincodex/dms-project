<?php

namespace App\Http\Requests\V1\Office;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOfficeRequest extends FormRequest
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
            "officeId"=>['required', 'string', 'max:255'],
            "officeName"=>['required', 'string', 'max:255'],
            "officeLocation"=>['required', 'string', 'max:255'],
        ];
    }
}
