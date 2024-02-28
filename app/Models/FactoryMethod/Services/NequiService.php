<?php

namespace App\Models\FactoryMethod\Services;

use App\Models\FactoryMethod\Interfaces\PaymentInterface;

class NequiService implements PaymentInterface
{
    public function applyPay()
    {
        return "Nequi processed the payment correctly!";
    }
}
