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
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];
        # |unique:users,email
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Campo nome é obrigatorio',
            'name.string' => 'Campo deve ser apenas texto',
            'name.max' => 'Maximo de caracteres permitidos, é 255',
            'email.required' => 'Campo e-mail é obrigatorio',
            'email.email' => 'Campo deve ser um email valido!',
            'password.required' => 'Campo senha é obrigatorio',
            'password.min' => 'Senha com no minimo :min caracteres!',
        ];
        # 'email.unique' => 'O e-mail já está cadastrado!',
    }
}




