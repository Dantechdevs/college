<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherFormRequest extends FormRequest
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
            //
            'firstName'=>['required'],
            'lastName'=>['required'],
            'middleName'=>['required'],
            'teacherId'=>['required'],
            'image'=>['required','image','mimes:jpg,jpeg,png'],
           // 'coursesId'=>['required'],
           // 'phone'=>['required'],
           // 'email'=>['required'],
        ];
    }
}
