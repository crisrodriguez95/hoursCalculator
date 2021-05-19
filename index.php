<?php
require('./Controller/payment.php');

$payment= new payment;

$data = $payment->getPayment();




