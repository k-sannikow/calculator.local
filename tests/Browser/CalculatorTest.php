<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CalculatorTest extends DuskTestCase
{
    /**
     * Тестирование открытия приложения
     *
     * @return void
     */
    public function testOpenApplication()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertTitle('Калькулятор')
                ->assertSee('Калькулятор')
                ->assertSee('Сложить')
                ->assertSee('Вычесть')
                ->assertSee('Умножить')
                ->assertSee('Делить')
                ->assertEnabled('number1')
                ->assertEnabled('number2');
        });
    }

    /**
     * Тестирование операции сложения
     *
     * @return void
     */
    public function testPerformAddition()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('number1', '2')
                ->type('number2', '3')
                ->press('#addition')
                ->assertSee('Результат: 5');
        });
    }

    /**
     * Тестирование операции вычитание
     *
     * @return void
     */
    public function testPerformSubtraction()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('number1', '2')
                ->type('number2', '3')
                ->press('#subtraction')
                ->assertSee('Результат: -1');
        });
    }

    /**
     * Тестирование операции умножение
     *
     * @return void
     */
    public function testPerformMultiplication()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('number1', '2')
                ->type('number2', '3')
                ->press('#multiplication')
                ->assertSee('Результат: 6');
        });
    }

    /**
     * Тестирование операции деление
     *
     * @return void
     */
    public function testPerformDivision()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('number1', '2')
                ->type('number2', '3')
                ->press('#division')
                ->assertSee('Результат: 0.66666666666667');
        });
    }

    /**
     * Тестирование операции без ввода значений
     *
     * @return void
     */
    public function testPerformWithoutValues()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->press('#addition')
                ->assertSee('Ошибка! Необходимо ввести первый операнд')
                ->assertSee('Ошибка! Необходимо ввести второй операнд');
        });
    }

    /**
     * Тестирование операции с нечисловыми значениями
     *
     * @return void
     */
    public function testInputNonNumericValues()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('number1', 'a')
                ->type('number2', 'b')
                ->press('#addition')
                ->assertSee('Ошибка! Первый операнд должен быть числом')
                ->assertSee('Ошибка! Второй операнд должен быть числом');
            ;
        });
    }

    /**
     * Тестирование операции деление на ноль
     *
     * @return void
     */
    public function testPerformDivisionByZero()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('number1', '2')
                ->type('number2', '0')
                ->press('#division')
                ->assertSee('Ошибка! Деление на ноль');
        });
    }
}
