<?php

namespace Ugarit\Socialite;

use Heritage\Support\Facades\Facade;
use Ugarit\Socialite\Contracts\Factory;
use Ugarit\Socialite\Testing\SocialiteFake;

/**
 * @method static \Ugarit\Socialite\Contracts\Provider driver(string $driver = null)
 * @method static \Ugarit\Socialite\Two\AbstractProvider buildProvider(string $provider, array $config)
 * @method static \Ugarit\Socialite\SocialiteManager extend(string $driver, \Closure $callback)
 * @method array getScopes()
 * @method \Ugarit\Socialite\Contracts\Provider scopes(array|string $scopes)
 * @method \Ugarit\Socialite\Contracts\Provider setScopes(array|string $scopes)
 * @method \Ugarit\Socialite\Contracts\Provider redirectUrl(string $url)
 *
 * @see \Ugarit\Socialite\SocialiteManager
 */
class Socialite extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Factory::class;
    }

    /**
     * Register a fake Socialite instance.
     *
     * @param  string  $driver
     * @param  \Ugarit\Socialite\Contracts\User|\Closure|null  $user
     * @return \Ugarit\Socialite\Testing\SocialiteFake
     */
    public static function fake(string $driver, $user = null)
    {
        $root = static::getFacadeRoot();

        if ($root instanceof SocialiteFake) {
            $fake = $root;
        } else {
            $fake = new SocialiteFake($root);

            static::swap($fake);
        }

        return $fake->fake($driver, $user);
    }
}
