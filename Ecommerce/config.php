<?php
session_start();

if (!isset($_SESSION['customer_email'])) {
    $_SESSION['customer_email'] = 'unset';
} else {
    return;
}


// config.php

// Razorpay API keys and other configuration variables
$razorpayKey = "rzp_test_HLF4pGnPPJQiJ4";
$razorpaySecret = "0lSkZjZ2dsyacvnzEVMBBDTC";
?>
