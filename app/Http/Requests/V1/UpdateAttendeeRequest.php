<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAttendeeRequest extends FormRequest
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

        if ($method === 'PUT') {
            return [
                'firstName' => ['required'],
                'lastName' => ['required'],
                'email' => ['required', 'email'],
            ];
        } else {
            return [
                'firstName' => ['sometimes', 'required'],
                'lastName' => ['sometimes', 'required'],
                'email' => ['sometimes', 'required', 'email'],
            ];
        }

    }

    protected function prepareForValidation()
    {
        if($this->firstName) {
            $this->merge([
                'first_name' => $this->firstName,
            ]);
        }
        if($this->lastName) {
            $this->merge([
                'last_name' => $this->lastName,
            ]);
        }
    }
}
