<?php

namespace Astrogoat\Posthog\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class PosthogSettings extends AppSettings
{
    public string $key;
    public string $api_host;
    public string $identified_only;

    public function rules(): array
    {
        return [
            'key' => Rule::requiredIf($this->enabled === true),
            'api_host' => Rule::requiredIf($this->enabled === true),
            'identified_only' => Rule::requiredIf($this->enabled === true),
        ];
    }

    public function apiHostOptions(): array
    {
        return [
            'https://eu.i.posthog.com' => 'EU',
        ];
    }

    public function identifiedOnlyOptions(): array
    {
        return [
            'identified_only' => 'Identified only',
            'always' => 'Always',
        ];
    }

    public function description(): string
    {
        return 'The single platform to analyze, test, observe, and deploy new features.';
    }

    public static function group(): string
    {
        return 'posthog';
    }
}
