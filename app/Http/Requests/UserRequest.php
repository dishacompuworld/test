<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'city' => 'required',
        ];
    }

    public function messages(){
        return[
        'username.required' => 'Enter Name Proprly.',
           'email.required' => 'Enter Email Address.',
           'email.email' => 'Enter Email Address Properly!',
           'password.required' => 'Enter Password field',
           'password.min:8' => 'Enter Password mininmum 8 charactors long!',
           'city.required' => 'Enter City Field.',
        ];
    }

    protected function prepareForValidation(): void{
        
        $this->merge([
            'username' => strtoupper($this->username),
        ]);
    }
}
