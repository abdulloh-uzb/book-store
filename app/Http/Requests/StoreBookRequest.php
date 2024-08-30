<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'title'=>['required', 'string','max:255'],
            'description' => ['required', 'max:500'],
            'price' => ['required', 'min:1', 'max:500'],
            'quantity' => ['required', 'integer', 'min:1', 'max:10'],
            'published_year' => ['required', 'integer'],
            'category_id' => ['required', 'integer'],
            'format_id' => ['required', 'integer'],
            'author_id' => ['required', 'integer'],
        ];
    }
}
