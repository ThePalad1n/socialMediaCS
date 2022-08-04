<?php
// load F3
require 'vendor/autoload.php';
// instantiate f3
$f3 = Base::instance();
// set config / routes
$f3->config('config/config.ini');
$f3->config('config/routes.ini');
$f3->run();