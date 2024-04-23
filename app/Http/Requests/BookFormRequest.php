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
        if(Request::isMethod('post')){
        return [
            'title'=>['required','string','min:3'],
            'description'=>['required','string','min:8'],
            'publisher'=>['integer','nullable'],
            'tags'=>[],
            'thumbnail'=>['required','file','image','extensions:jpg,jpeg,png','max:2048'],
            'book'=>['required','file','extensions:pdf','mimetypes:application/pdf','max:32768'],
        ];
        }else{
            return [
                'title'=>['required','min:3'],
                'description'=>['required','min:8'],
                'publisher'=>['numeric','nullable'],
                'tags'=>[],
            ];
        }

    }
}
