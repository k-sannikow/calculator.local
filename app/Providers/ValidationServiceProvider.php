<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class ValidationServiceProvider extends ServiceProvider
{
    /**
     * Загрузка сервисов приложения..
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('division_by_zero', function ($attribute, $value, $parameters, $validator) {
            /**
             * Строковый идентификатор операции
             *
             * @var string
             */
            $operation = $parameters[0];
            /**
             * Делитель
             *
             * @var integer|double
             */
            $divider = array_get($validator->getData(), $parameters[1], null);

            if ($value == $operation && $divider == 0) {
                return false;
            }
            return true;
        });
    }
}
