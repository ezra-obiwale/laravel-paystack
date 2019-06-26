<?php

namespace Paystack\Facades;

use Illuminate\Support\Facades\Facade;

class Api extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'paystack';
    }

    public function __call($method, $args)
    {
        return $this->getFacadeRoot()->$method(...$args);
    }

    public function __get($property)
    {
        return $this->getFacadeRoot()->$property;
    }

    public static function __callStatic($method, $args)
    {
        try {
            return call_user_func_array([self::getFacadeRoot(), $method], $args);
        } catch (\Exception $ex) {
            return self::getFacadeRoot()->$method;
        }
    }

}
