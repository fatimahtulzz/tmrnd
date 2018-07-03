<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'research';


$route['system_added'] = 'research/system_added';
$route['delete_system'] = 'research/delete_system';
$route['system_edit/(:any)'] = 'research/system_edit/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



