<?php

namespace App\Http\Controllers;

use App\Models\FactoryMethod\Factories\PaymentMethodCreator;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class FactoryMethodController extends Controller
{
    private $paymentMethodCreator;

    public function __construct(PaymentMethodCreator $paymentMethodCreator)
    {
        $this->paymentMethodCreator = $paymentMethodCreator;
    }

    public function proccesPayment(Request $request)
    {
        try {
            $data = $request->all();
            $factoryMethod = $this->paymentMethodCreator->createMethodPayment($data['method']);
            $response =  $factoryMethod->applyPay();
            return response()->json(['successfully'=> true, 'data'=> $response]);
        } catch (\Throwable $th) {
            return response()->json(["succesfully" => false, "error" => $th->getMessage()]);
        }
    }
}
