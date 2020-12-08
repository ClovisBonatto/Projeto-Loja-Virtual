<?php

namespace App\Correios;

use App\Correios\Providers\CalcPrecoPrazo;
use App\Correios\Providers\Sigep;
use Illuminate\Support\Collection;


class CorreioManeger
{
    protected $avalibleProviders = [
        Sigep::class,
        CalcPrecoPrazo::class
    ];

    protected function getAvalibleProviders(): Collection
    {
        return collect($this->avalibleProviders)->mapWithKeys(function ($class){
            $instance = app($class);
            return [$instance->getName() => $instance];
        });
    }

    public function provider($name)
    {
        return $this->getAvalibleProviders()
            ->get($name);
    }
}