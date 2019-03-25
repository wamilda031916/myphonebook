<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
$active_group = 'default';
$query_builder = TRUE;

$db['default'] =  array(
'dsn' => '',
'hostname' => 'localhost',
'useraname' => 'root',
'password' => '',
'database' => 'db_relatives',
'dbdriver' => 'mysqli',
'dbprefix' => '',
'pconnect' => FALSE,
'db_debug' => (ENVIRONMENT !== 'production'),
'cache_on' => FALSE,
'cachedir' => '',
'chars_set' => 'utf8',
'dbcollat' => 'utf8_general_ci',
'swap_pre' => '',
'encrypt' => FALSE,
'compress' => FALSE,
'striction' => FALSE,
'failover' =>array(),
'save_queries' => TRUE
);