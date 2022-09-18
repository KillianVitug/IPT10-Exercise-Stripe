<?php
require_once "vendor/autoload.php";

$stripe = new \Stripe\StripeClient('sk_test_51LiVB2BKtX6VunCbiJRoA29ibi2Q1hPEPioNFcv7iKnFXSNOoLmGee5HT4wRmzCUKrQKyjZsjoQBtbwzbHO9fMhD00L1vz5oTz');  

$product = $stripe->products->create([
    'name' => 'Starter Subscription',
    'description' => '$10/Month subscription',
]);
echo "Success! Here is your starter subscription product id: " . $product->id . "\n";

$price = $stripe->prices->create([
    'unit_amount' => 1200,
    'currency' => 'usd',
    'recurring' => ['interval' => 'month'],
    'product' => $product['id'],
]);
echo "Success! Here is your premium subscription price id: " . $price->id . "\n";

?>