<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//when at the root directory, the Courses controller is called.
$route['default_controller'] = "Courses";
//when the "Yes.." link is clicked, the course ID is passed in the URL,which is then passed to the destroy method as a variable
$route['/courses/destroy/(:num)'] = "courses/destroy/$1";
//when the 'Delete' link is clicked, the course ID is passed in the URL, which is then passed to the display method as a variable
$route['/courses/display/(:num)'] = "courses/display/$1";
$route['404_override'] = '';
