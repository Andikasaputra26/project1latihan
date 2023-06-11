<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade as FacadesFacade;

class Cart extends FacadesFacade
{
    public static function getFacedeAccessor()
    {
        return 'cart';
    }
}
