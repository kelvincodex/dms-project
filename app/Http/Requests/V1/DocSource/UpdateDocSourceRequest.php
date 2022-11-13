<?php

namespace App\Http\Requests\V1\DocSource;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDocSourceRequest extends FormRequest
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
            "docSourceId"=>['required'],
            "docSourceName"=>['required', 'string', 'max:255'],
            "docSourceStatus"=>['required', 'string', 'max:255'],
        ];
    }
}
