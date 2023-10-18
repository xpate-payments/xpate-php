<?php

require __DIR__ . '/../vendor/autoload.php';

// Set these to your actual endpoint and API key
$endpoint = getenv('XPATE_ENDPOINT');
$apiKey = getenv('XPATE_API_KEY');

// Get our client
$client = \Xpate\Xpate::createClient($endpoint, $apiKey);

// Create our order without specifying a payment method
$order = $client->createOrder(
    [
        'amount' => 250, // Amount in cents
        'currency' => 'EUR'
    ]
);

// Show the order URL where the user can select a payment method and initiate the transaction
echo "Payment URL: " . $order['order_url'] . "\n";
