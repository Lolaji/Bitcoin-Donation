<?php
     /**
      * On the page, a webhook notification data will be received and you can get it through $_GET global variable.
      */

     require 'config.php';
     $cont = new src\Controller($token);
     $sess = $_SESSION['payment_data']->index ?? null;

     $result = get($sess);
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
          <?php if (!is_null($result != false)): ?>

               <h3>Payment Page</h3>
               <p>Donation ID: <?= $result->order_id ?></p>
               <p>Payment Amount: BTC <?= $result->amount ?></p>
               <p>Payment Address: <span style="color: blue"> <?= $result->addr ?></span></p>
               <p>Payment Status: <span style="font-weight: 700"><?= !is_null($result->paid_at)? 'paid': 'waiting for payment...' ?></span></p>
               <a href="">Refresh page to see payment update</a> | <a href="/">Donate Again</a>
          <?php else: ?>
               <h4>You must fill out the <a href="/">form here</a> before you can access this page.</h4>
          <?php endif; ?>

     </div>
</body>
</html>