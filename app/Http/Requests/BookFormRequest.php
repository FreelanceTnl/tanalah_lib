<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;

class BookFormRequest extends FormRequest
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
            'title'=>['required','string','min:3'],
            'publisher_id'=>['integer','nullable'],
            'tags'=>[],
            'size'=>['numeric'],
            'thumbnail_link'=>['required','string'],
            'book_link'=>['required','string'],
            'available'=>['boolean']
        ];

    }
}
