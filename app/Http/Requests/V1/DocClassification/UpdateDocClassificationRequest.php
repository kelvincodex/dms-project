<?php

namespace App\Http\Requests\V1\DocClassification;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDocClassificationRequest extends FormRequest
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
            "docClassificationId"=>['required'],
            "docClassificationName"=>['required'],
            "docClassificationStatus"=>['required', 'string', 'max:255'],
        ];
    }
}
