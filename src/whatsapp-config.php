<?php
// generate-config.php

// Path to the .env file
$envFilePath = base_path('.env');

// Load environment variables from .env file
if (file_exists($envFilePath)) {
    $envConfig = parse_ini_file($envFilePath);
    $site_url = $envConfig['WHATSAPP_SITE_URL'] ?? null;
    $whatsappApiKey = $envConfig['WHATSAPP_API_KEY'] ?? null;
    $authKey = $envConfig['AUTH_KEY'] ?? null;
    $templateId = $envConfig['TEMPLATE_ID'] ?? null;

    // Write config array to config file
    $configFilePath = __DIR__ . '/whatsapp-config.php';
    $config = [
        'site_url' => $site_url,
        'whatsapp_api_key' => $whatsappApiKey,
        'auth_key' => $authKey,
        'template_id' => $templateId,
        'country_code' => '+91'
    ];

    $configFilePath = __DIR__ . '/whatsapp-config.php';
    $configContent = "<?php\n\nreturn " . var_export($config, true) . ";\n";
    
    // Save the config to the file
    file_put_contents($configFilePath, $configContent);

    echo "Config file created successfully.\n";
} else {
    echo "Error: .env file not found. Please ensure the .env file exists.\n";
}
