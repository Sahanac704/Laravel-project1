<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => ['required','string','max:255'],
            'thumbnail' => ['nullable','image'],
            'price' => ['required','numeric'],
            'discount' => ['nullable','numeric'],
            'detail' => ['required','string','max:255'],
            'category_id' =>['required'],
            'files' => ['required','array'],
            'files.*' =>['required','mimes:jpg,png,pdf'],

            'size' => ['required','string','max:255'],
            'color' => ['nullable','string','max:255'],
            'quantity' => ['nullable','string'],

        ];
    }
}
