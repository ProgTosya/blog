<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'email|required|string|unique:users,email'.$this->user->id,
            'role' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле необходимо для заполнения',
            'name.string' => 'Поле должно быть строкой',
            'email.email' => 'Неверно указан email',
            'email.required' => 'Поле необходимо для заполнения',
            'email.string' => 'Поле должно быть строкой',
            'email.unique' => 'Пользователь с таким email уже существует',
            'role.required' => 'Поле необходимо для заполнения',
            'role.integer' => 'Поле должно быть целым числом',
        ];
    }
}
