<?php
// Path to the .env file
$envFilePath = base_path('.env');

// Check if the .env file exists
if (file_exists($envFilePath)) {
    // Read the contents of the .env file
    $lines = file($envFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Skip the first three lines of the .env file
    $envConfig = array_slice($lines, 3);

    // Parse the remaining lines as an INI file
    $envConfig = parse_ini_string(implode("\n", $envConfig));

    // Proceed with configuration generation as before
   

    // Format the config array
    $config = [
        'site_url' => env('WHATSAPP_SITE_URL'),
        'whatsapp_app_key' => `env('WHATSAPP_APP_KEY')`,
        'auth_key' => `env('AUTH_KEY')`,        
        'country_code' => '+91'
    ];

    // Generate content for whatsapp-config.php
    $configContent = "<?php\n\nreturn " . var_export($config, true) . ";\n";

    // Path to the whatsapp-config.php file
    $configFilePath = config_path('whatsapp-config.php');

    // Write the config content to the file
    file_put_contents($configFilePath, $configContent);

    echo "Config file created successfully.\n";

    // Define the new values to update or add
    $newEnvValues = [
        'WHATSAPP_SITE_URL' => '',
        'WHATSAPP_APP_KEY' => '',
        'AUTH_KEY' => ''       
    ];

    foreach ($newEnvValues as $key => $value) {
        // Append the new key-value pairs to the .env file
        file_put_contents($envFilePath, "\n{$key}={$value}", FILE_APPEND);
    }

    echo "Environment variables updated successfully.\n";
} else {
    echo "Error: .env file not found. Please ensure the .env file exists.\n";
}
