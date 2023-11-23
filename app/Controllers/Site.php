<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Site extends BaseController
{
    public function index()
    {
        //
    }
    public function aboutUs(){
        echo "<h2> Welcome to about us page </h2>";
    }
    public function contactUs(){
        return view("contact-us");
    }
}
