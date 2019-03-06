<?php

namespace App\Services;

/**
 * Класс Калькулятор
 */
class Calculator
{
    /**
     * Сложение
     *
     * @param double|integer $number1 первый операнд
     * @param double|integer $number2 второй операнд
     *
     * @return double|integer сумма
     */
    public function addition($number1, $number2)
    {
        return $number1 + $number2;
    }

    /**
     * Вычитание
     *
     * @param double|integer $number1 первый операнд
     * @param double|integer $number2 второй операнд
     *
     * @return double|integer разность
     */
    public function subtraction($number1, $number2)
    {
        return $number1 - $number2;
    }

    /**
     * Умножение
     *
     * @param double|integer $number1 первый операнд
     * @param double|integer $number2 второй операнд
     *
     * @return double|integer произведение
     */
    public function multiplication($number1, $number2)
    {
        return $number1 * $number2;
    }

    /**
     * Деление
     *
     * @param double|integer $number1 первый операнд
     * @param double|integer $number2 второй операнд
     *
     * @return double|integer частное|результат деления на ноль
     */
    public function division($number1, $number2)
    {
        if ($number2 == 0) {
            return $number1 / $number2;
        }
    }
}
