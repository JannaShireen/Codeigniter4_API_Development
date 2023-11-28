<?php

use App\Controllers\Admin\AdminController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about-us','Site::aboutUs');
$routes->get('contact-us','Site::contactUs');
$routes->get('user-create','Home::insertData');
$routes->get('user-update','Home::updateUser');
$routes->get('user-delete','Home::deleteUser');
$routes->get('user-list','Home::selectData');
$routes->get('get-method','Site::getMethod');
$routes->post('post-method','Site::postMethod');
$routes->get('put-method','Site::putMethod');
$routes->get('delete-method','Site::deleteMethod');



$routes->group("api", function ($routes){
    $routes->get('create-user','Site::createMethod');
$routes->get('list-user','Site::listMethod');
$routes->get('update-user/(:any)','Site::deleteMethod/$1');
$routes->get('delete-user/(:any)','Site::updateMethod/$1');

});

$routes->group("admin",["namespace" =>"App\Controllers\Admin"],function ($routes){
$routes->get("/","AdminController::index");
$routes->get("method1", "AdminController::method1");
});

$routes->group("user",["namespace" => "App\Controllers\User"], function ($routes){
 $routes->get("/","UserController::index");
 $routes->get("method1", "UserController::method1");
});

// $routes->get('user-create','Home::insert');