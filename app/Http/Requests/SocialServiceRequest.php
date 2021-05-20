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
            'fecha_inicio' => 'required | date',
            'dependencia' => 'max:200 | nullable',
            'programa' => 'max:200 | nullable',
            'horas_estandar' => 'required | numeric | between:0,500',
            'horas_acumuladas' => 'nullable | numeric | between:0,500',
            'start_period' => 'nullable | date',
            'end_period' => 'nullable | date',
            'bimester_total_hours' => 'nullable | numeric | between:0,500',
            'acummulated_hours' => 'nullable | numeric | between:0,500'
        ];
    }
}
