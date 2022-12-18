<?php

namespace App\Billing;

use Illuminate\Http\Request;

class CreditPaymentGateway implements PaymentGatewayContract
{
    
    public $currency;
    public $discount;

    public function __construct($currency)
    {
    	$this->currency=$currency;
    	$this->discount=0;
    }
    
	public function setDiscount($amount)
    {
		$this->discount=$amount;
	}

    public function charge($amount)
    {

        $fees=$amount * 0.03;
        
    	return [
        'amount'=>$amount-$this->discount-$fees,
        'currency'=>$this->currency,
        'discount'=>$this->discount,
        'fees'=>$amount * 0.03
        ];

    }

}
