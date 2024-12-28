<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CmsValidationRequest extends FormRequest
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
            'page' => 'nullable|string', // Page name is required
            'section' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'nullable|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'sub_title1' => 'nullable|string|max:255',
            'description1' => 'nullable|string',
            'sub_title2' => 'nullable|string|max:255',
            'description2' => 'nullable|string',
            'sub_title3' => 'nullable|string|max:255',
            'description3' => 'nullable|string',
            'sub_title4' => 'nullable|string|max:255',
            'description4' => 'nullable|string',
            'sub_title5' => 'nullable|string|max:255',
            'description5' => 'nullable|string',
            'button' => 'nullable|string|max:255',
            'status' => 'nullable|in:active,inactive',
        ];
    }
    
    
}
