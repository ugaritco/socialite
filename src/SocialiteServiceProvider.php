<?php

namespace Ugarit\Socialite;

use Heritage\Contracts\Support\DeferrableProvider;
use Heritage\Support\ServiceProvider;
use Ugarit\Socialite\Contracts\Factory;

class SocialiteServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Factory::class, function ($app) {
            return new SocialiteManager($app);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Factory::class];
    }
}
