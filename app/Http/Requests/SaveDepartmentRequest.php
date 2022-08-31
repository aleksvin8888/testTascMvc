<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveDepartmentRequest extends FormRequest
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
            'title'      => 'required|string|min:4|max:150|unique:departments,title',

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле обовязкове для заповнення',
            'title.string' => 'Поте не відповідає текстовому значенню',
            'title.unique' => 'Департамент з вказаною назвою вже створено',
            'title.min' => 'Мінімальна кількість символів 4',
            'title.max' => 'Максимальна кількість символів 150',


        ];
    }
}
