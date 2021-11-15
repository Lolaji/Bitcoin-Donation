

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Bitcoin Donation</title>
</head>
<body>
     <div align="center" style="padding-top: 10%; border: 1px solid dark;">
          <h3>Make A Donation</h3>
          <form method="POST" action="/init_payment.php">
               <input type="text" step="0.00000000" name="amount" placeholder="Amount in BTC">
               <button type="submit">Donate Now</button>
          </form>
     </div>
</body>
</html>
