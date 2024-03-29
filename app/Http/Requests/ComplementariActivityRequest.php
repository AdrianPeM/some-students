<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComplementariActivityRequest extends FormRequest
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
            'name' => 'max:200 | required',
            'period' => ['required', 'regex: /(Enero - Junio)|(Agosto - Diciembre)/u'],
            'revision_date' => 'required | date',
            'hours' => 'required | numeric | between:0,40',
        ];
    }
}