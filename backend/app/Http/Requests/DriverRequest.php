<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DriverRequest extends FormRequest
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
            'first_name' => 'required|string|min:2|max:50',
            'second_name' => 'required|string|min:2|max:30',
            'last_name' => 'required|string|min:2|max:30',
            'type_doc_id' => 'required|numeric|gt:0|exists:type_docs,id',
            'document' => 'required|numeric|min:11111111|max:9999999999',
            'phone' => 'required|numeric|min:3000000000|max:3999999999',
            'direction' => 'required|string|min:2|max:30',
            'city_id' => 'required|numeric|gt:0|exists:cities,id',
        ];
    }
}
