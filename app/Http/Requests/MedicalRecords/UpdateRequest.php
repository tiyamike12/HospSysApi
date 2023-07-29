<?php

namespace App\Http\Requests\MedicalRecords;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'patient_id' => 'exists:patients,id',
            'user_id' => 'exists:users,id',
            'medical_notes' => 'nullable|string',
            'diagnoses' => 'nullable|string',
            'prescriptions' => 'nullable|string',
            'lab_results' => 'nullable|string',
        ];
    }
}
