<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'      => 'required|email|unique:users,email',
            'first_name'       => 'required|string|min:4|max:150',
            'address'       => 'string|nullable',
            'phone'       => 'string|nullable',
            'comment'       => 'string|nullable',
            'department_id'    => 'required|numeric|exists:departments,id',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Поле обовязкове для заповнення',
            'email.email' => 'Поле не являеться адресом електронної почти ',
            'email.unique' => 'Користувач з вказаним email зареєстрований у системі ',
            'first_name.required' => 'Поле обовязкове для заповнення',
            'first_name.min' => 'Мінімальна кількість символів 4',
            'first_name.max' => 'Максимальна кількість символів 150',
            'first_name.string' => 'Поте не відповідає текстовому значенню',
            'address.string' => 'Поте не відповідає текстовому значенню',
            'phone.string' => 'Поте не відповідає текстовому значенню',
            'comment.string' => 'Поте не відповідає текстовому значенню',
            'department_id.required' => 'Поле обовязкове для заповнення',
            'department_id.numeric' => 'Поле не відповідає числовому значенню',
            'department_id.exists' => 'Помилка вказано неіснуючий департамент',

        ];
    }
}
