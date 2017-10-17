<?php

require 'environment.php';

define("BASE", "http://localhost/CMS/CMS_PHP/");

global $config;
$config = array();
if (ENVIRONMENT == 'development') {
    $config['dbname'] = 'bd_cms';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    $config['dbname'] = 'bd_cms';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}
?>