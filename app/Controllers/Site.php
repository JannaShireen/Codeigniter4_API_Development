<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Site extends BaseController
{
    public function getMethod(){
        echo " This is GET method";
    }
    public function postMethod(){
        echo "This is POST METHOD";
    }
    public function putMethod(){
        echo "this is PUT method";
    }
    public function deleteMethod(){
        echo "this is delete method";
    }
}
