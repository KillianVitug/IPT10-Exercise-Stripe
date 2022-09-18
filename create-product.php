<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LiVB2BKtX6VunCbiJRoA29ibi2Q1hPEPioNFcv7iKnFXSNOoLmGee5HT4wRmzCUKrQKyjZsjoQBtbwzbHO9fMhD00L1vz5oTz'
);
$result = $stripe->products->create([
  'name' => 'Apple MacBook Pro 13 Inch 2017',
]);
var_dump($result);
