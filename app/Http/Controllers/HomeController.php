<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Dummy;

class HomeController extends BaseController
{
    public function __construct(){
       parent::__construct();
    }
    
    public function getIndex()
    {
    	$serhat = Dummy::find(1);
        return view('welcome', compact('serhat'));
    }
}