<?php

namespace Paystack\Facades;

use Illuminate\Support\Facades\Facade;

class Laravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'paystack';
    }
}
