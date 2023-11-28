<?php

namespace spatie\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \spatie\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \spatie\Example\Example::class;
    }
}
