<?php

namespace App\Models\FactoryMethod\Interfaces;

interface PaymentMethodInterface
{
    public function createMethodPayment(string $method) : PaymentInterface;
}
