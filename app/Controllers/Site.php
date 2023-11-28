<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Site extends BaseController
{
    public function createMethod(){
        echo " This is create method";
    }
    public function listMethod(){
        echo "This is list METHOD";
    }
    public function deleteMethod($id){
        echo "this is delete method";
    }
    public function updateMethod($id){
        echo "this is update method";
    }
}
