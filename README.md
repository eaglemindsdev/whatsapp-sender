<h1 align="center"><img src="https://eagleminds.net/wp-content/uploads/2023/04/eagleminds-logo-final-copy-1.png" alt="Eagleminds Technologies Pvt Ltd"></h1>

# WhatsApp Message Sender API Library for PHP

WhatsApp message send with [WhatsApp-Sender](https://sender.track-new.com/) This library provides a simple and efficient way to send WhatsApp messages programmatically using PHP. It is designed to work seamlessly with Laravel and can be easily integrated into your projects using Composer.

## Features
- Send Messages: Send text, images, videos, documents, and other media via WhatsApp.
- Laravel Integration: Built with Laravel developers in mind for smooth integration.
- Composer Support: Easily install and manage dependencies using Composer.

## Installation

You can install this library via Composer. Run the following command in your terminal:
```sh
composer require yourvendor/whatsapp-message-sender
```

## Usage
### Initialize the Library
First, you need to initialize the WhatsApp message sender with your credentials:
```sh
use eagleminds\whatsapp-sender;
$sender = new WhatsAppMessageSender('your_api_key', 'your_api_secret');
```
### Send a Message
You can then use the sendMessage method to send a message to a WhatsApp recipient:
```sh
$recipient = 'whatsapp_number';
$message = 'Hello, this is a test message!';
$response = $sender->sendMessage($recipient, $message);
```
### Send Media
To send media such as images, videos, or documents, use the sendMediaMessage method:
```sh
$mediaUrl = 'https://example.com/image.jpg';
$caption = 'Check out this image!';
$response = $sender->sendMediaMessage($recipient, $mediaUrl, $caption);
```
## WhatsApp Sender Platform Documentation
This repository contains documentation for integrating with the WhatsApp Sender Platform provided by Track New. This platform allows you to send WhatsApp messages programmatically using APIs. Below are the steps to register, login, and obtain the necessary keys and template IDs for integration.

### Registering and Logging In
To use the WhatsApp Sender Platform, you need to register on the [WhatsApp-Sender](https://sender.track-new.com/) website.

### Registration Steps
 - Visit the [WhatsApp-Sender](https://sender.track-new.com/) website.
 - Click on the "Sign Up" or "Register" button.
 - Fill out the registration form with your details, including email address and password.
- Submit the form to create your account.
### Logging In
 - Go to the [WhatsApp-Sender](https://sender.track-new.com/)r website.
 - Click on the "Login" button.
 - Enter your registered email address and password.
 - Click on "Login" to access your account dashboard.
## Obtaining API Key and Template ID
  After logging in, you will need to obtain the necessary API key (app_key), authentication key (auth_key), and template ID for integrating with the WhatsApp Sender Platform.

 ### Getting API Key (app_key) and Authentication Key (auth_key)
 - Once logged in, navigate to your account settings or dashboard.
 - Look for an option like "API Keys" or "Integration Settings".
 - Generate or find your API key (app_key) and authentication key (auth_key).
 - Note down these keys as they will be required for API authentication.
 ## Obtaining Template ID
- In your account dashboard, find the section related to message templates or templates management.
 - Create a new template if required or select an existing template.
 - Note down the template ID associated with the template you wish to use for sending messages.
   
## Examples
Here are some examples to help you get started:

### Sending a Text Message
```sh
$response = $sender->sendMessage('whatsapp_number', 'Hello, World!');
```
### Sending an Image
```sh
$mediaUrl = 'https://example.com/image.jpg';
$caption = 'Check out this image!';
$response = $sender->sendMediaMessage('whatsapp_number', $mediaUrl, $caption);
```
## Requirements
 - PHP 7.0 or higher
 - Laravel 5.5 or higher (if using with Laravel)
 

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
