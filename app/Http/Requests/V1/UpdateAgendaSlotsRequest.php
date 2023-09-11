<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAgendaSlotsRequest extends FormRequest
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
        $method = $this->method();

        if($method === 'PUT') {
            return [
                'agendaID' => ['required'],
                'startTime' => ['required', 'date_format:Y-m-d H:i:s'],
                'endTime' => ['required', 'date_format:Y-m-d H:i:s'],
                'details' => ['required'],
            ];
        } else {
            return [
                'agendaID' => ['sometimes', 'required'],
                'startTime' => ['sometimes', 'required', 'date_format:Y-m-d H:i:s'],
                'endTime' => ['sometimes', 'required', 'date_format:Y-m-d H:i:s'],
                'details' => ['sometimes', 'required'],
            ];
        }
    }

    protected function prepareForValidation()
    {
        if($this->agendaID) {
            $this->merge([
                'agenda_id' => $this->agendaID,
            ]);
        }
        if($this->sessionID) {
            $this->merge([
                'session_id' => $this->sessionID,
            ]);
        }
        if($this->startTime) {
            $this->merge([
                'start_time' => $this->startTime,
            ]);
        }
        if($this->endTime) {
            $this->merge([
                'end_time' => $this->endTime,
            ]);
        }
    }
}
