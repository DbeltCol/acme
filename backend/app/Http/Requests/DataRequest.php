<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataRequest extends FormRequest
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
            'license_plate' => 'required|string|min:2|max:30',
            'brand' => 'required|string|min:2|max:30',
            'color' => 'required|string|min:2|max:30',
            'type' => 'required|string|min:2|max:30',
            'first_name_driver' => 'required|string|min:2|max:50',
            'second_name_driver' => 'required|string|min:2|max:30',
            'last_name_driver' => 'required|string|min:2|max:30',
            'type_doc_id_driver' => 'required|numeric|gt:0|exists:type_docs,id',
            'document_driver' => 'required|numeric|min:11111111|max:9999999999',
            'phone_driver' => 'required|numeric|min:3000000000|max:3999999999',
            'direction_driver' => 'required|string|min:2|max:30',
            'city_driver' => 'required|numeric|gt:0|exists:cities,id',
            'first_name' => 'required|string|min:2|max:50',
            'second_name' => 'required|string|min:2|max:30',
            'last_name' => 'required|string|min:2|max:30',
            'type_doc_id' => 'required|numeric|gt:0|exists:type_docs,id',
            'document' => 'required|numeric|min:11111111|max:9999999999',
            'phone' => 'required|numeric|min:3000000000|max:3999999999',
            'direction' => 'required|string|min:2|max:30',
            'city' => 'required|numeric|gt:0|exists:cities,id',

        ];
    }
}
