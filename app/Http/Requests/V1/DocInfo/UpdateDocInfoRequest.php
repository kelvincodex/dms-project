<?php

namespace App\Http\Requests\V1\DocInfo;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDocInfoRequest extends FormRequest
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
            "docInfoId"=>['required'],
            "docInfoOfficeId"=>['required'],
            "docInfoMailId"=>['required'],
            "docInfoDocSourceId"=>['required'],
            "docInfoReceiverId"=>['required'],
            "docInfoHandlerId"=>['required'],
            "docInfoPriority"=>['required'],
            "docInfoDocClassificationId"=>['required'],
            "docInfoDateOfArrival"=>['required'],
            "docInfoTimeOfArrival"=>['required'],
        ];
    }
}
