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

$route['default_controller'] = "c_login";
$route['404_override'] = '';

$route['login'] = 'c_login/index';
$route['dashboard'] = 'c_dashboard/index';

$route['post'] = 'c_post/index';
$route['post/edit/(:num)'] = 'c_post/edit/$1';
$route['post/update'] = 'c_post/update';
$route['post/add'] = 'c_post/add';
$route['post/save'] = 'c_post/save';
$route['post/delete'] = 'c_post/delete';

$route['kategori'] = 'c_kategori/index';
$route['kategori/edit/(:num)'] = 'c_kategori/edit/$1';
$route['kategori/update'] = 'c_kategori/update';
$route['kategori/add'] = 'c_kategori/add';
$route['kategori/save'] = 'c_kategori/save';
$route['kategori/delete'] = 'c_kategori/delete';

$route['user'] = 'c_user/index';
$route['user/edit/(:num)'] = 'c_user/edit/$1';
$route['user/update'] = 'c_user/update';
$route['user/add'] = 'c_user/add';
$route['user/save'] = 'c_user/save';
$route['user/delete'] = 'c_user/delete';

/* End of file routes.php */
/* Location: ./application/config/routes.php */