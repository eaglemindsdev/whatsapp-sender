<?php

// src/WhatsAppServiceProvider.php

namespace Eagleminds\WhatsappSender;

use Illuminate\Support\ServiceProvider;

class WhatsAppServiceProvider extends ServiceProvider
{
   

    public function boot()
    {
        // Publish configuration file during installation
        $this->publishes([
            __DIR__ . '/whatsapp-config.php' => config_path('whatsapp-config.php'),
        ], 'whatsapp-config');
    }
}
