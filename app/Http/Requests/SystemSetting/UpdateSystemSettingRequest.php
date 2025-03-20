<?php

namespace App\Http\Requests\SystemSetting;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSystemSettingRequest extends FormRequest
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
            'title' => ['required','string','max:255'],
            'phone_number' => ['required', 'numeric'],
            'email' => ['required','email'],
            'address' => ['required','string','max:255'],
            'map_url' => ['required'],
            'logo' => ['nullable','image'],
            'thumbnail' => ['nullable','image'],
            'instagram_url' => ['nullable'],
            'twitter_url' => ['nullable'],
            'tiktok_url' => ['nullable'],
            'pininterest_url' => ['nullable'],
            'youtube_url' => ['nullable'],
        ];
    }
}
