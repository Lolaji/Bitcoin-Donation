<?php
namespace src;
require './vendor/autoload.php';

use GuzzleHttp\Client;

class Controller {
     private $Client;
     private $ApiToken;

     public function __construct($token)
     {
          $this->ApiToken = $token;
          $this->Client = new Client(['base_uri' => "https://bitcpay.herokuapp.com"]);
     }
     public function donate ($order_id, $amount)
     {
          try {
               $header = [
                    "Accept"=> "application/json",
                    "Authorization"=> "Bearer {$this->ApiToken}"
               ];
     
               $resp = $this->Client->post('/api/v1/payments', [
                    "headers" => $header,
                    "form_params" => [
                         "order_id" => $order_id,
                         "amount" => $amount
                    ]
               ]);
     
               return json_decode($resp->getBody());

          } catch (\Throwable $th) {
               echo $th->getMessage();
          }
     }

     public function redirect ($url) 
     {
          header("Location: ".$url);
          // die();
     }
}