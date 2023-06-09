<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://js.stripe.com/v3/"></script>
    <link rel="stylesheet" href="style.css">
    <title>Checkout Page</title>
</head>
<body>
    <h1>Customized Checkout Page</h1>
    <h1>Buy now for only $14</h1>
    <div class="form">
    <label for="cardnum">Card Number: </label>
    <div id="cardnum"></div>

    <label for="cardexp">Card Expiry: </label>
    <div id="cardexp"></div>

    <label for="cardcvc">Card CVC: </label>
    <div id="cardcvc"></div>
    <button disabled> Pay Now</button>
    </div>
    <div class="status"></div>
    <script src="client.js"></script>

</body>
</html>