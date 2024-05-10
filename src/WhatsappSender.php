<?php

namespace Eagleminds\WhatsappSender;

class WhatsAppSender
{
    protected $apiUrl;
    protected $apiKey;

    public function __construct($apiUrl, $apiKey)
    {
        $this->apiUrl = $apiUrl;
        $this->apiKey = $apiKey;
    }

    public function sendWhatsAppMessage($to, $message)
    {
        $endpoint = 'sendMessage';

        $data = [
            'phone' => $to,
            'body' => $message,
        ];

        $url = $this->apiUrl . $endpoint . '?token=' . $this->apiKey;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

        $response = curl_exec($ch);
        curl_close($ch);

        // Handle response from API
        $responseData = json_decode($response, true);

        if ($responseData && isset($responseData['sent']) && $responseData['sent']) {
            return true;
        } else {
            return false;
        }
    }
}