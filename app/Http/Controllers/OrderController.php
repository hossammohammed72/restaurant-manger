<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlaceOrderRequest;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function placeOrder(PlaceOrderRequest $request){
        dd($request);
    }
}
