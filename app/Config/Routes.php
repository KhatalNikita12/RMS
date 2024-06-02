<?php

use CodeIgniter\Router\RouteCollection;

/*
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin', 'Home::admin');
$routes->get('/sidebar', 'Home::side');
$routes->get('/contact', 'Home::contact');
$routes->get('/aboutus', 'Home::aboutus');
$routes->get('/userbody', 'Home::userbody');
// $routes->get('/user', 'Foodcontroller::show');
// $routes->get('/user-form', 'Foodcontroller::create');
// $routes->post('/submit-form', 'Foodcontroller::store');
// $routes->get('delete/(:num)', 'Foodcontroller::delete/$1');
// $routes->get('edit-view/(:num)', 'Foodcontroller::singleUser/$1');
// $routes->post('update', 'Foodcontroller::update');

// chef routes start
$routes->get('/chef', 'Chefscontroller::show');
$routes->get('/chef-form', 'Chefscontroller::create');
$routes->post('/submitchef-form', 'Chefscontroller::store');
$routes->get('deletechef/(:num)', 'Chefscontroller::deletechef/$1');
$routes->get('editchef/(:num)', 'Chefscontroller::edituser/$1');
$routes->post('updatechef', 'Chefscontroller::updatechef');
// $routes->get('exampleController/loadContent', 'Foodcontroller::loadContent');
//customer route start******
$routes->get('/customer', 'Customercontroller::show');
$routes->get('/customer-form', 'Customercontroller::create');
$routes->post('/submitcust-form', 'Customercontroller::store');
$routes->get('deletecust/(:num)', 'Customercontroller::deletecust/$1');
$routes->get('edit-cust/(:num)', 'Customercontroller::singlecustomer/$1');
$routes->post('updatecust', 'Customercontroller::update');

$routes->get('/waiter', 'Waitercontroller::show');
$routes->get('/waiter-form', 'Waitercontroller::create');
$routes->post('/submitwaiter-form', 'Waitercontroller::store');
$routes->get('deletewaiter/(:num)', 'Waitercontroller::deletewaiter/$1');
$routes->get('edit-waiter/(:num)', 'Waitercontroller::singlewaiter/$1');
$routes->post('updatewaiter', 'Waitercontroller::update');

$routes->get('/emp', 'Empcontroller::show');
$routes->get('/emp-form', 'Empcontroller::create');
$routes->post('/submitemp-form', 'Empcontroller::store');
$routes->get('deletemp/(:num)', 'Empcontroller::deleteemp/$1');
$routes->get('edit-emp/(:num)', 'Empcontroller::singleemp/$1');
$routes->post('updateemp', 'Empcontroller::update');


// tablebooking routes start
$routes->get('/table', 'Bookings::show');
$routes->get('/booktable', 'Bookings::create');
$routes->get('/status', 'Bookings::status');
$routes->post('/search-results', 'Bookings::search');
// $routes->post('/searchstatus', 'Booking::searchstatus');
$routes->post('/submit-tbl', 'Bookings::store');
$routes->get('deletetable/(:num)', 'Bookings::deletetable/$1');
$routes->get('bookingDetails/(:num)', 'Bookings::bookingDetails/$1');
// tablebooking routes end

// addfood routes start
$routes->get('/newfood-form', 'Newfood::create');
$routes->get('/newfood', 'Newfood::show');
$routes->get('/foodbody', 'Newfood::foodbody');
// $routes->get('/chef-form', 'Chefscontroller::create');
$routes->post('/submitnewfood-form', 'Newfood::store');
$routes->get('deletenewfood/(:num)', 'Newfood::deletenewfood/$1');
$routes->get('editnewfood/(:num)', 'Newfood::editfood/$1');
$routes->post('updatenewfood', 'Newfood::updatefood');

//resturant start
$routes->get('/restuarant-form', 'RestaurantController::create');
$routes->get('/resturant', 'RestaurantController::show');
// $routes->get('/chef-form', 'Chefscontroller::create');
$routes->post('/submitnewrestuarant-form', 'RestaurantController::store');
$routes->get('deletenewrestuarant/(:num)', 'RestaurantController::deletenewrestuarant/$1');
$routes->get('editnewrestuarant/(:num)', 'RestaurantController::editnewrestuarant/$1');
$routes->post('updatenewrestuarant', 'RestaurantController::updaterestuarant');

///resturant end

//cart start
// $routes->get('/add-to-cart', 'Newfood::addToCart');
$routes->get('add-to-cart/(:num)', 'CartController::addToCart/$1');
$routes->get('/cart-form', 'CartController::create');
$routes->get('/cart', 'CartController::show');
$routes->get('/cartview', 'CartController::cartview');
// $routes->get('/chef-form', 'Chefscontroller::create');
$routes->post('/submitcart-form', 'CartController::store');
$routes->get('deletecart/(:num)', 'CartController::deletecart/$1');
$routes->get('editcart/(:num)', 'CartController::editcart/$1');
$routes->post('updatecart', 'CartController::updaterestuarant');
$routes->get('/bill', 'CartController::bill');

///cart end

service('auth')->routes($routes);
