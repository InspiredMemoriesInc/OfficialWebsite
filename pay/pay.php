<?php

require('config.php');
require('razorpay-php/Razorpay.php');
session_start();

// Create the Razorpay Order
use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

$name = ($_GET['name']);
$college = ($_GET['college']);
$phone = ($_GET['phone']);
$email = ($_GET['email']);
$sem = ($_GET['semester']);
$branch = ($_GET['branch']);
$purpose = ($_GET['purpose']);
$know = ($_GET['know']);
$twitter = ($_GET['twitter']);
$linkedin = ($_GET['linkedin']);
$hometown = ($_GET['hometown']);
$field = ($_GET['field']);
$learn = ($_GET['learn']);
$aboutus = ($_GET['aboutus']);
$lab = ($_GET['lab']);

$_SESSION['name1'] = $name;
$_SESSION['college1'] = $college;
$_SESSION['phone1'] = $phone;
$_SESSION['email1'] = $email;
$_SESSION['sem1'] = $sem;
$_SESSION['branch1'] = $branch;
$_SESSION['purpose1'] = $purpose;
$_SESSION['know1'] = $know;
$_SESSION['twitter1'] = $twitter;
$_SESSION['linkedin1'] = $linkedin;
$_SESSION['hometown1'] = $hometown;
$_SESSION['field1'] = $field;
$_SESSION['learn1'] = $learn;
$_SESSION['aboutus1'] = $aboutus;
$_SESSION['lab1'] = $lab;

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
$orderData = [
    'receipt'         => 'IMDEVLABS',
    'amount'          => 1000 * 100, // 1000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'automatic';
$orderid = mt_rand();

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => 'IM Developer Labs',
    "description"       => 'Feb 21st and 22nd',
    "image"             => 'https://media.licdn.com/mpr/mpr/shrink_200_200/AAEAAQAAAAAAAAheAAAAJGZlNzhmZWYxLWE4ZjgtNGVkOC05NDhiLTY4NmNiOTg1ZTI5Ng.png',
    "prefill"           => [
    "name"              => '',
    "email"             => '',
    "contact"           => '',
    ],
    "notes"             => [
    "address"           => '',
    "merchant_order_id" => $orderid,
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);

require("checkout/{$checkout}.php");
