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
