<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "Courses";
$route['/return'] = "Courses";
$route['/courses/destroy/(:num)'] = "courses/destroy/$1";
$route['/courses/display/(:num)'] = "courses/display/$1";
$route['404_override'] = '';
