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

// $routes->get('user-create','Home::insert');