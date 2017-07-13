<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;


class Controller extends BaseController
{
    public function save_log(){
 		
        $uri = $request->path();
    	echo $uri;
    	die;
        
 
    }
 
}
