<?php

namespace App\Support\Facades;

use App\Correios\CorreioManeger;
use Illuminate\Support\Facades\Facade;

class Correio extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() 
    {
        return CorreioManeger::class; 
    }
}