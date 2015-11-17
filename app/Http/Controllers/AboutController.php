<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AboutController extends BaseController
{
   
    public function getIndex()
    {
        return view('about');
    }
}