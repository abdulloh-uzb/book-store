<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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

            "username" => ["required", "unique:users", "min:5", "max:255"],
            "email" => ["required", "max:255", "email", "unique:users,email"],
            "password" => ["required", "min:6", "confirmed"],
        ];
    }
}
