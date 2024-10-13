<?php

namespace Astrogoat\Posthog\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class PosthogSettings extends AppSettings
{
    // public string $url;

    public function rules(): array
    {
        // return [
        //     'url' => Rule::requiredIf($this->enabled === true),
        // ];
    }

    public function description(): string
    {
        return 'Interact with Posthog.';
    }

    public static function group(): string
    {
        return 'posthog';
    }
}
