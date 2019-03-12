<?php

namespace Tests\Unit;

use Calculator;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Class for calculator test.
 */
class CalculatorTest extends TestCase
{
    /**
     * Тестирование метода addition.
     *
     * @param double|integer $number1 первый операнд
     * @param double|integer $number2 второй операнд
     * @param double|integer $expected ожидаемый результат
     *
     * @return void
     *
     * @dataProvider additionProvider
     */
    public function testAddition($number1, $number2, $expected)
    {
        $this->assertEquals($expected, Calculator::addition($number1, $number2));
    }

    /**
     * Провайдер данных для testAddition
     *
     * @return array набор даннх для теста
     */
    public function additionProvider()
    {
        return [
            'положительное + положительное' => [7, 3, 10],
            'положительное + ноль' => [5, 0, 5],
            'положительное + отрицательное' => [5, -3, 2],
            'ноль + ноль' => [0, 0, 0],
            'отрицательное + ноль' => [-5, 0, -5],
            'отрицательное + отрицательное' => [-3, -3, -6],
        ];
    }

    /**
     * Тестирование метода subtraction.
     *
     * @param double|integer $number1 первый операнд
     * @param double|integer $number2 второй операнд
     * @param double|integer $expected ожидаемый результат
     *
     * @return void
     *
     * @dataProvider subtractionProvider
     */
    public function testSubtraction($number1, $number2, $expected)
    {
        $this->assertEquals($expected, Calculator::subtraction($number1, $number2));
    }

    /**
     * Провайдер данных для testSubtraction
     *
     * @return array набор даннх для теста
     */
    public function subtractionProvider()
    {
        return [
            'положительное - положительное' => [8, 4, 4],
            'положительное - ноль' => [4, 0, 4],
            'положительное - отрицательное' => [6, -3, 9],
            'ноль - ноль' => [0, 0, 0],
            'отрицательное - ноль' => [-3, 0, -3],
            'отрицательное - отрицательное' => [-4, -3, -1],
        ];
    }

    /**
     * Тестирование метода multiplication.
     *
     * @param double|integer $number1 первый операнд
     * @param double|integer $number2 второй операнд
     * @param double|integer $expected ожидаемый результат
     *
     * @return void
     *
     * @dataProvider multiplicationProvider
     */
    public function testMultiplication($number1, $number2, $expected)
    {
        $this->assertEquals($expected, Calculator::multiplication($number1, $number2));
    }

    /**
     * Провайдер данных для testMultiplication
     *
     * @return array набор даннх для теста
     */
    public function multiplicationProvider()
    {
        return [
            'положительное * положительное' => [5, 4, 20],
            'положительное * ноль' => [10, 0, 0],
            'положительное * отрицательное' => [4, -3, -12],
            'ноль * ноль' => [0, 0, 0],
            'отрицательное * ноль' => [-5, 0, 0],
            'отрицательное * отрицательное' => [-3, -2, 6],
        ];
    }

    /**
     * Тестирование метода division.
     *
     * @param double|integer $number1 первый операнд
     * @param double|integer $number2 второй операнд
     * @param double|integer $expected ожидаемый результат
     *
     * @return void
     *
     * @dataProvider divisionProvider
     */
    public function testDivision($number1, $number2, $expected)
    {
        $this->assertEquals($expected, Calculator::division($number1, $number2));
    }

    /**
     * Провайдер данных для testDivision
     *
     * @return array набор даннх для теста
     */
    public function divisionProvider()
    {
        return [
            'положительное / положительное' => [8, 2, 4],
            'положительное / ноль' => [3, 0, false],
            'положительное / отрицательное' => [6, -2, -3],
            'ноль / ноль' => [0, 0, false],
            'отрицательное / ноль' => [-4, 0, false],
            'отрицательное / отрицательное' => [-4, -2, 2],
        ];
    }
}
