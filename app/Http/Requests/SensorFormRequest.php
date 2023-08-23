<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SensorFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'sensor' => [
                'required',
                'string',
                'max:2'
            ],
            'sensor_name' => [
                'required',
                'string',
                'max:50'
            ],
            'unit' => [
                'required',
                'string',
                'max:10'
            ],
            'created_by' => [
                'bigint',
            ],
        ];
    }
}
