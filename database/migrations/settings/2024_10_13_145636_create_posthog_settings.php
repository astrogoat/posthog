<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('posthog.enabled', false);
        $this->migrator->add('posthog.key', '');
        $this->migrator->add('posthog.api_host', 'https://eu.i.posthog.com');
        $this->migrator->add('posthog.identified_only', 'identified_only');
    }

    public function down()
    {
        $this->migrator->delete('posthog.enabled');
        $this->migrator->delete('posthog.key');
        $this->migrator->delete('posthog.api_host');
        $this->migrator->delete('posthog.identified_only');
    }
};
