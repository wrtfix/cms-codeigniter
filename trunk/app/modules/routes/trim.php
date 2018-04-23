<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Package: Codefight CMS
 * Module: Trim URL
 * Author: Damodar Bashyal
 * Date: 5/10/2011
 */
 
 // admin routes
$route['admin/trim(/.*)?'] = 'admin/trim/trim/index$1';

// frontend routes
// trim
$route['trim(/.*)?'] = 'frontend/trim/trim/index$1';
