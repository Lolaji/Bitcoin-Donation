<?php
     /**
      * On the page, a webhook notification data will be received and you can get it through $_GET global variable.
      */

     require 'config.php';
     $cont = new src\Controller($token);
     $sess = $_SESSION['payment_data'] ?? null;

     if (isset($_GET['transaction_hash'])) {
          $invoice_id = $_GET['order_id']; //invoice_id is passed back to the callback URL
          $amount = $_GET['amount'];
          $transaction_hash = $_GET['transaction_hash'];
          $value_in_satoshi = $_GET['value'];
          $value_in_btc = $value_in_satoshi / 100000000;
          
          //At this stage, you can test for any notification data received 
          // and make some database transaction

          $recorded_to_dataase = true;

          if ($recorded_to_dataase) {
               echo "*ok*"; // NOTE: you must echo or print "*ok*" after receiving and/or use the notification data received
          }

     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Bitcoin Donation</title>
</head>
<body>
     <div align="center" style="padding-top: 4%;">
          <?php if (!is_null($sess)): ?>
               <h3>Payment Page</h3>
               <p>Donation ID: <?= $_GET['order_id'] ?></p>
               <p>Payment Amount: BTC <?= $_GET['amount'] ?></p>
               <p>Payment Address: <?= $sess->address ?></p>
          <?php else: ?>
               <h4>You must fill out the <a href="/">form here</a> before you can access this page.</h4>
          <?php endif; ?>

     </div>
</body>
</html>