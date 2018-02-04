<?php
session_start();

$_POST['razorpay_payment_id'] = $_SESSION['payment_id'];
$html = "<p>Your payment was successful</p>
        <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";

        echo $html;