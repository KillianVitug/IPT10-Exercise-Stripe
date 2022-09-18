<?php

require 'vendor/autoload.php';
// This is your test secret API key.
\Stripe\Stripe::setApiKey('sk_test_51LiVB2BKtX6VunCbiJRoA29ibi2Q1hPEPioNFcv7iKnFXSNOoLmGee5HT4wRmzCUKrQKyjZsjoQBtbwzbHO9fMhD00L1vz5oTz');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost:8080/public';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => 'price_1LjSIgBKtX6VunCbBpR9wT3n',
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);