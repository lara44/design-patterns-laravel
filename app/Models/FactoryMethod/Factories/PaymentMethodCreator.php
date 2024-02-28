<?php

namespace App\Models\FactoryMethod\Factories;

use App\Models\FactoryMethod\Interfaces\{PaymentMethodInterface, PaymentInterface};
use App\Models\FactoryMethod\Services\{DaviplataService, NequiService};
use InvalidArgumentException;


class PaymentMethodCreator implements PaymentMethodInterface
{
    private $daviplataService;
    private $nequiService;

    public function __construct(
        DaviplataService $daviplataService,
        NequiService $nequiService
    ) {
        $this->daviplataService = $daviplataService;
        $this->nequiService = $nequiService;
    }

    public function createMethodPayment(string $method): PaymentInterface
    {
        switch ($method) {
            case 'Daviplata':
                return $this->daviplataService;
            case 'nequi':
                return $this->nequiService;
            default:
                throw new InvalidArgumentException("Payment Method: {$method} is not supported.");
        }
    }
}
