<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Routes
$route['default_controller']   = 'leave';
$route['leave-history']        = 'leave/history';
$route['allocated']            = 'leave/all_balance';
$route['available']            = 'leave/av_balance';
$route['read']                 = 'leave/email';
$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;
