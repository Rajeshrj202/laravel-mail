<?php

namespace App\Billing;

use Illuminate\Http\Request;

interface PaymentGatewayContract
{
    
    public function setDiscount($amount);
    

    public function charge($amount);
    

}
