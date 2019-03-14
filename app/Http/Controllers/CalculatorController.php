<?php

namespace App\Http\Controllers;

use Calculator;
use App\Http\Requests\CalculatorRequest;

/**
 * Контроллер класса Калькулятор.
 */
class CalculatorController extends Controller
{
    /**
     * Точка входа в приложение
     *
     * @return Viev представление
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Обработка данных
     *
     * @param CalculatorRequest $request экземпляр текущего HTTP-запроса
     *
     * @return Viev представление
     */
    public function calculate(CalculatorRequest $request)
    {
        $number1 = $request->number1;
        $number2 = $request->number2;
        $operation = $request->operation;
        switch ($operation) {
            case 'addition':
                $result = Calculator::addition($number1, $number2);
                break;
            case 'subtraction':
                $result = Calculator::subtraction($number1, $number2);
                break;
            case 'multiplication':
                $result = Calculator::multiplication($number1, $number2);
                break;
            case 'division':
                $result = Calculator::division($number1, $number2);
                break;
            default:
                $result = null;
                break;
        }

        return view('index', [
            'result' => $result,
            'number1' => $number1,
            'number2' => $number2,
        ]);
    }
}
