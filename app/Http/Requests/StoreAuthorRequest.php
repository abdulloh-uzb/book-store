<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuthorRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "first_name" => ["required", "regex:/^[\p{Cyrillic}a-zA-Z]+$/u", "max:30"],
            "last_name" => ["required", "regex:/^[\p{Cyrillic}a-zA-Z]+$/u", "max:30"],
            "birth_year" => ["required", "digits:4"],
            "death_year" => ["nullable", "digits:4", "different:birth_year"],
            "description" =>["nullable", "max:500"],
            "country" => ["required", "regex:/^[\p{Cyrillic}a-zA-Z]+$/u"],
        ];
    }
}
