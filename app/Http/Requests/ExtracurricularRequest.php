<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExtracurricularRequest extends FormRequest
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
            'start_date' => 'required | date',
            'end_date' => 'required | date',
            'taken_classes' => 'required | numeric | between:0,500',
            'total_classes' => 'required | numeric | between:0,500',
        ];
    }
}
