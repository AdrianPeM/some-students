<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialServiceReportRequest extends FormRequest
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
            'start_period' => 'required | date',
            'end_period' => 'required | date',
            'bimester_total_hours' => 'required | numeric | between:0,500'
        ];
    }
}
