<?php
     require 'config.php';
     use src\Controller;

     if ($_SERVER['REQUEST_METHOD'] == "POST") {
          $order_id = rand(1, 100);
          $amount = $_POST['amount'];
          if (isset($amount) && !is_null($amount)) {
               // $order = 
               $cont = new Controller($token);
               $resp = $cont->donate($order_id, $amount);
               $_SESSION['payment_data'] = $resp;
               $cont->redirect(urldecode($resp->callback));
               die();
          } else {
               echo "Amount field is required";
          }

     }
     
?>
