<?php

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

// $routes->get('user-create','Home::insert');