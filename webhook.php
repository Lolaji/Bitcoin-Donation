<?php
     require "config.php";

     $order_id = $_GET['order_id']; //order_id passed back to the callback URL

     $payment = getByOrderId($order_id);// get record payment record

     if ($payment != false) {// if found
          $amount = $_GET['amount'];
          $transaction_hash = $_GET['transaction_hash'];
          $value_in_satoshi = $_GET['value'];
          $value_in_btc = $value_in_satoshi / 100000000; //convert value passed back in setoshi to btc
          // echo $value_in_btc;
          // die();
          
          //At this stage, you can test for any notification data received 
          // and make some database transaction
          if ($value_in_btc >= $payment->amount) {
               $updated = update($payment->id);

               if ($updated) {
                    echo "*ok*";
               }
          }


     }
?>