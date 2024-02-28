<?php

namespace App\Models\FactoryMethod\Services;

use App\Models\FactoryMethod\Interfaces\PaymentInterface;

class DaviplataService implements PaymentInterface
{
    public function applyPay()
    {
        return "Daviplata processed the payment correctly!";
    }
}
