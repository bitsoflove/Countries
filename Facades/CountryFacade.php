<?php namespace Modules\Countries\Facades;

use Illuminate\Support\Facades\Facade;

class CountryFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'country';
    }
}
