<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



class ValidRequest extends FormRequest
{
    public function authorize()
    {
       return true;
    }

    public function rules()
    {
        return [
            'project.*.work_time' => 'nullable|numeric',
        ];
    }
}
