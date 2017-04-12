<?php declare(strict_types=1);

namespace Foo\Bar\Example\Facades;

use Illuminate\Support\Facades\Facade;

class Cats extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'example.cats';
    }
}
