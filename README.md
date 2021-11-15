
## Installation

1. Create a config.php file, open it and put your api token. You can create and copy it using the follow comand:

```sh
$ cp config.example.php config.php
```

2. Open a terminal and run the following command (you can also use local server like xampp, nginx etc. to serve this): 

```sh
$ php -S 127.0.0.1:8000
```
3. To be able to receive notification on local server you will need ngrok. Serve the ngrok as follow:

```sh
$ ngrok http 8000
```

## Implementation

### Index.php file

contain a form for users to input amount

### init_payment.php file

contains the login to create payment address and when the address is successfully created, it will redirect to payment.php

### payment.php file

display the payment information and receive notification for payment. On this page user will copy the bicoin address generated to make a payment to, and also receive payment notification data sent by blockchain.




