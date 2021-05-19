<?php

use PHPUnit\Framework\TestCase;

class paymentTest extends TestCase
{

    public function test_getAmount()
    {
        require('../Controller/payment.php');

        $payment = new payment;        
        $this -> assertEquals($payment->getAmount('23','TH09:00-14:00'), 20);
       
    }
}
