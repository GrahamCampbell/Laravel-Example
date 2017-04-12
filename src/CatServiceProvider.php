<?php declare(strict_types=1);

namespace Foo\Bar\Example;

use Illuminate\Support\ServiceProvider;

class CatServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('example.cats', function () {
            return new Cats();
        });

        $this->app->alias('example.cats', Cats::class);
    }
}
