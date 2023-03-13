
<?php
require './vendor/autoload.php';
header('Content-Type: application/json');

$stripe = new \Stripe\StripeClient("sk_test_51MheLgLcdJFs9m98nwfAK6DpxqeN613vizp0TYJCDxI6KWobltC7LRdxp2dqjatO0plGfO3SRQniu82YtoKVP7T200sjadOGus");
$paymentIntent = $stripe->paymentIntents->create([
    'amount' => 1400,
    'currency' => 'usd',
    'payment_method_types' =>['card'],
    'description' =>'Payment Collected on behalf of Carl Newport.com'
]);

echo json_encode(['client_secret' => $paymentIntent->client_secret]);
