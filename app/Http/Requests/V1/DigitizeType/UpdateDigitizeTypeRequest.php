<?php

namespace App\Http\Requests\V1\DigitizeType;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDigitizeTypeRequest extends FormRequest
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
            "digitizeTypeId"=>['required'],
            "digitizeTypeName"=>['required'],
            "digitizeTypeStatus"=>['required', 'string', 'max:255'],
        ];
    }
}