<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Site extends BaseController
{

    public function route1(){
        echo "This is protected route";
    }
    public function route2(){
        echo "This is an open route";
    }
    public function route3(){
        echo "This is another protected route";
    }
    public function route4(){
        echo "This is another open route";
    }
    public function setUser(){
        $session = session();
        $session->set("isLoggedIn",1);
    }
    public function removeUser(){
        $session = session();
        $session->remove("isLoggedIn");
    }
}
