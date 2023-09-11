<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreAgendaSlotsRequest extends FormRequest
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
            'agendaID' => ['required'],
            'startTime' => ['required', 'date_format:Y-m-d H:i:s'],
            'endTime' => ['required', 'date_format:Y-m-d H:i:s'],
            'details' => ['required'],
        ];
    }

    protected function prepareForValidation() {
        $this->merge([
            'agenda_id' => $this->agendaID,
            'session_id' => $this->sessionID,
            'start_time' => $this->startTime,
            'end_time' => $this->endTime,
        ]);

    }
}
