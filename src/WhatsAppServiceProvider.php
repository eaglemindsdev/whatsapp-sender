<?php

// src/WhatsAppServiceProvider.php

namespace Eagleminds\WhatsappSender;

use Illuminate\Support\ServiceProvider;

class WhatsAppServiceProvider extends ServiceProvider
{
    public function register()
    {
                $this->app->bind(WhatsAppSender::class, function ($app) {
            // Retrieve configuration values from your Laravel configuration
            $apiUrl = config('whatsapp.api_url');
            $apiKey = config('whatsapp.api_key');
            $authKey = config('whatsapp.auth_key');
            $templateId = config('whatsapp.template_id');
            $countryCode = config('whatsapp.country_code');

            return new WhatsAppSender($apiUrl, $apiKey, $authKey, $templateId, $countryCode);
        });
    }

    public function boot()
    {
        // Publish configuration file during installation
        $this->publishes([
            __DIR__ . '/../config/whatsapp-config.php' => config_path('whatsapp-config.php'),
        ], 'config');
    }
}
