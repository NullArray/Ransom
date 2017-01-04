<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayController extends Controller
{
    public function getPayment()
    {
    	return View('pages.pay.payment');
    }

    public function getBitcoinCall()
    {
    	
    }
}
