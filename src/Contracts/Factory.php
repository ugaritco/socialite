<?php

namespace Ugarit\Socialite\Contracts;

interface Factory
{
    /**
     * Get an OAuth provider implementation.
     *
     * @param  string  $driver
     * @return \Ugarit\Socialite\Contracts\Provider
     */
    public function driver($driver = null);
}
