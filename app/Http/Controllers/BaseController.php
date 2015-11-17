<?php 

namespace App\Http\Controllers;

use View;

//You can create a BaseController:

class BaseController extends Controller {


    public function __construct() {
      	$l = \Config::get('app.locale');  
		$globalVariable = 'This is a global variable';
		
		View::share(array(
	    	'l' => $l, 
	    	'globalVariable' => $globalVariable, 
		));
    }  

} 