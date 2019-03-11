<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalculatorRequest extends FormRequest
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
            'number1' => 'required|numeric',
            'number2' => 'required|numeric',
            'operation' => 'required|string|division_by_zero:division,number2',
        ];
    }

    /**
     * Получить сообщения об ошибках для определенных правил проверки.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'number1.required' => 'Необходимо ввести первый операнд',
            'number2.required' => 'Необходимо ввести второй операнд',
            'number1.numeric' => 'Первый операнд должен быть числом',
            'number2.numeric' => 'Второй операнд должен быть числом',
            'operation.division_by_zero' => 'Деление на ноль',
        ];
    }
}
