<?php

// src/WhatsAppServiceProvider.php

namespace Eagleminds\WhatsappSender;

use Illuminate\Support\ServiceProvider;

class WhatsAppServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Bind the SendMessage class as a singleton
        $this->app->singleton('whatsappSender', function ($app) {
            return new SendMessage();
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
