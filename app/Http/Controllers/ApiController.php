<?php

namespace App\Http\Controllers;

use App\Rsa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ApiController extends Controller
{
    public function getRsaKey($identifier, Rsa $rsa)
    {
    	// generate an RSA key based on their identifier
    	$key = Crypt::encrypt($identifier);

    	$rsa->generate($identifier, $key);

    	return response()->json([
            'rsa' => $key,
            'url' => urldecode(action('PayController@getPayment', $identifier))
        ]);
    }
}
