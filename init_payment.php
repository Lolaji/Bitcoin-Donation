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
               $result = insert($order_id, $resp->index, $amount, $resp->address);
               $_SESSION['payment_data'] = $resp;
               $cont->redirect(urldecode("/payment.php?order_id=$resp->index"));
               die();
          } else {
               echo "Amount field is required";
          }

     }
     
?>
