<?php

namespace Astrogoat\Posthog;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Posthog\Posthog
 */
class PosthogFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'posthog';
    }
}
