<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Front';

$route['ar/(:any)'] = 'Front';
$route['ar/Front/newslist'] = '/Front/newslist';
$route['ar/Front/events/(:any)'] = '/Front/events/$1';
$route['ar/page/(:any)'] = '/Front/pagedetails/$1';
$route['ar/page/advertisewithus'] = '/page/advertisewithus';
$route['ar/page/membership'] = '/page/membership';
$route['ar/Front/boardofdirectores'] = '/Front/boardofdirectores';
$route['ar/Front/register'] = '/Front/register';
$route['ar/Front/staff'] = '/Front/staff';
$route['ar/Front/agreements'] = '/Front/agreements';
$route['ar/Front/login'] = '/Front/login';
$route['ar/Front/contact'] = '/Front/contact';
$route['ar/Front/aboutus'] = '/Front/aboutus';
$route['ar/Front/postdetail/(:any)'] = '/Front/postdetail/$1';
$route['ar/Front/eventdetail/(:any)'] = '/Front/eventdetail/$1';
$route['ar/Front/survey'] = '/Front/survey';
$route['ar/Front/survey'] = '/Front/survey';
$route['ar/survey/(:num)/edit/(:any)'] = 'Front/surveydetail/$1/$2';






//routing for rtl
$route['page/(:any)'] = 'Front/pagedetails/$1';
$route['survey/(:any)/(:any)'] = 'Front/surveydetail/$1/$2';
$route['survey/(:num)/edit/(:any)'] = 'Front/surveydetail/$1/$2';
$route['en'] = 'Front';
//$route['ar'] = 'Front/events';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
