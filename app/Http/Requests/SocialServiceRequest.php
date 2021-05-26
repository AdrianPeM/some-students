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
            'organization' => 'max:200',
            'program' => 'max:200',
            // 'hours_add' => 'nullable | numeric | between:0,100',
            //Reports
            'start_period' => 'date',
            'end_period' => 'date',
            'bimester_total_hours' => 'numeric | between:0,500'
        ];
    }
}
