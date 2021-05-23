<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialServiceRequest extends FormRequest
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
            'start_date' => 'required | date',
            'organization' => 'max:200 | nullable',
            'program' => 'max:200 | nullable',
            'hours_add' => 'required | numeric | between:0,500',
            'accum_hours' => 'nullable | numeric | between:0,500',
            'start_period' => 'nullable | date',
            'end_period' => 'nullable | date',
            'bimester_total_hours' => 'nullable | numeric | between:0,500'
        ];
    }
}
