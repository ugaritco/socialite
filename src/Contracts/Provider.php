<?php

namespace Ugarit\Socialite\Contracts;

interface Provider
{
    /**
     * Redirect the user to the authentication page for the provider.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Heritage\Http\RedirectResponse
     */
    public function redirect();

    /**
     * Get the User instance for the authenticated user.
     *
     * @return \Ugarit\Socialite\Contracts\User
     */
    public function user();
}
