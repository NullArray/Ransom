<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rsa extends Model
{
	protected $table = "rsa";

	protected $fillable = [
		'computer_identifier', 'computer_identifier'
	];

    public function generate($id, $key)
    {
    	// inoiate the RSA 
    	$rsa = new Rsa;

    	//dd($rsa);
    	// Store their identifier and rsa in the database
    	$rsa->computer_identifier = $id;
    	$rsa->rsa_identifier = $key;
        $rsa->ip = geoip()->getClientIP();
        $rsa->country = geoip()->getLocation(geoip()->getClientIP())->country;
        $rsa->state = geoip()->getLocation(geoip()->getClientIP())->state;
    	
        $rsa->save();

    	// return their RSA key for the encrption

    }
}
