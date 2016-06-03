<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['default_controller'] = 'user/index';
$route['404_override'] = '';

/*admin*/
$route['admin'] = 'user/index';
$route['admin/signup'] = 'user/signup';
$route['admin/create_member'] = 'user/create_member';
$route['admin/login'] = 'user/index';
$route['admin/logout'] = 'user/logout';
$route['admin/login/validate_credentials'] = 'user/validate_credentials';

$route['admin/home'] = 'admin_home/index';

// $route['admin/products'] = 'admin_client/index';
// $route['admin/products/add'] = 'admin_client/add';
// $route['admin/products/update'] = 'admin_client/update';
// $route['admin/products/update/(:any)'] = 'admin_client/update/$1';
// $route['admin/products/delete/(:any)'] = 'admin_client/delete/$1';
// $route['admin/products/(:any)'] = 'admin_client/index/$1'; //$1 = page number

$route['admin/products'] = 'admin_product/index';
$route['admin/products/add'] = 'admin_product/add';
$route['admin/products/update'] = 'admin_product/update';
$route['admin/products/update/(:any)'] = 'admin_product/update/$1';
$route['admin/products/delete/(:any)'] = 'admin_product/delete/$1';
$route['admin/products/(:any)'] = 'admin_product/index/$1'; //$1 = page number

// $route['admin/manufacturers'] = 'admin_seller/index';
// $route['admin/manufacturers/add'] = 'admin_seller/add';
// $route['admin/manufacturers/update'] = 'admin_seller/update';
// $route['admin/manufacturers/update/(:any)'] = 'admin_seller/update/$1';
// $route['admin/manufacturers/delete/(:any)'] = 'admin_seller/delete/$1';
// $route['admin/manufacturers/(:any)'] = 'admin_seller/index/$1'; //$1 = page number

$route['admin/categories'] = 'admin_category/index';
$route['admin/categories/add'] = 'admin_category/add';
$route['admin/categories/update'] = 'admin_category/update';
$route['admin/categories/update/(:any)'] = 'admin_category/update/$1';
//$route['admin/categories/update/(:any)'] = 'admin_category/test';
$route['admin/categories/delete/(:any)'] = 'admin_category/delete/$1';
$route['admin/categories/(:any)'] = 'admin_category/index/$1'; //$1 = page number

$route['admin/clients'] = 'admin_client/index';
$route['admin/clients/add'] = 'admin_client/add';
$route['admin/clients/update'] = 'admin_client/update';
$route['admin/clients/update/(:any)'] = 'admin_client/update/$1';
$route['admin/clients/delete/(:any)'] = 'admin_client/delete/$1';
$route['admin/clients/(:any)'] = 'admin_client/index/$1'; //$1 = page number


/* End of file routes.php */
/* Location: ./application/config/routes.php */