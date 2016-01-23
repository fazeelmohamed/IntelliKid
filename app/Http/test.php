<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Requests;

class test extends Controller
{
    


    public function test(Request $request){

    	echo "request came";

    	$name = $_GET['name'];
    	echo $name;
    }

    
}
