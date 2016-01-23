<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request as Request;


class Controller extends BaseController
{
    
    public function test(Request $request){

    	echo "request came";

    	$name = $request->input('name');
    	echo $name;
    }


}
