@php
    use Astrogoat\Posthog\Settings\PosthogSettings;
    $settings = app(PosthogSettings::class);
@endphp

@if($settings->enabled && filled($settings->key))
    <script src="{{ mix('js/posthog.js', 'vendor/posthog') }}"></script>
    <script>
        window.posthog.init('{{ $settings->key }}',
            {
                api_host: '{{ $settings->api_host }}',
                person_profiles: '{{ $settings->identified_only }}' // or 'always' to create profiles for anonymous users as well
            }
        )
    </script>
@endif
