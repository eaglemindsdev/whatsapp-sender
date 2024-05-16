<?php

namespace Eagleminds\WhatsappSender;

class WhatsAppSender
{
    protected $apiUrl;
    protected $apiKey;
    protected $authKey;
    protected $templateId;
    protected $countryCode;

    public function __construct($apiUrl, $apiKey, $authKey, $templateId, $countryCode)
    {
        $this->apiUrl = $apiUrl;
        $this->apiKey = $apiKey;
        $this->authKey = $authKey;
        $this->templateId = $templateId;
        $this->countryCode = $countryCode;
    }

    public function sendWhatsAppMessage($to, $message)
    {
        $composed_msg = $this->composeMessage($message);

       return $this->sendMessage($to, $composed_msg);
    }

    private function composeMessage($message){            
        return array('{data}' => $message);  
    }
   

    private function sendMessage($mobile_number, $message)
    {
        
      
        $appkey = $app_key;
        $authkey = $auth_key;
        $templateId = $template_id;
        // $appkey = $result->app_key;
        // $authkey = $result->auth_key;
        // $templateId = $result->template_id;
        
      
        $url = ENV('URL');


        $postFields = array(
            'appkey' => $this->apiKey,
            'authkey' => $this->authKey,
            'to' => $this->countryCode . $mobile_number,
            'template_id' => $this->templateId,
            'variables' => $message
        );       
        $curl = curl_init();
        try {
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => http_build_query($postFields),
                CURLOPT_SSL_VERIFYPEER => false,
            ));

            $response = curl_exec($curl);
            if (curl_errno($curl)) {
                throw new \Exception(curl_error($curl));
            }
        } catch (\Exception $e) {
             //var_dump("Error in sendMessage function: " . $e->getMessage());
            throw $e; // Re-throwing the exception to be caught in the calling function
        } finally {
            curl_close($curl);
        }

       // var_dump($response);

        return $response;
    }
}