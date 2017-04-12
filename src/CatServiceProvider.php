<?php declare(strict_types=1);

namespace Foo\Bar\Example;

use Illuminate\Contracts\Container\Container;
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;

class CatServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $source = realpath($raw = __DIR__.'/../config/cats.php') ?: $raw;

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('cats.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('cats');
        }

        $this->mergeConfigFrom($source, 'cats');
    }

    public function register()
    {
        $this->app->singleton('example.cats', function (Container $app) {
            return new Cats($app->config->get('cats.names', []));
        });

        $this->app->alias('example.cats', Cats::class);
    }
}
