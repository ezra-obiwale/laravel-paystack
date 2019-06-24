<?php

namespace Paystack\Facades;

use Illuminate\Support\Facades\Facade;

class Api extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'paystack';
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
