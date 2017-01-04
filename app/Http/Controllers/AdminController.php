<?php

namespace App\Http\Controllers;

use App\Rsa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function getKeys(Rsa $rsa)
    {
    	// get the keys
    	$keys = DB::table('rsa')->paginate(1);

    	return View('pages.admin.keys')->withKeys($keys);
    }
}
