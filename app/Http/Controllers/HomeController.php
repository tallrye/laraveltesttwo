<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends BaseController
{
    public function __construct(){
       parent::__construct();
    }
    
    public function getIndex()
    {
        return view('welcome');
    }
}