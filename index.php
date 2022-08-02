<?php
// load F3
require 'vendor/autoload.php';

// instantiate f3
$f3 = Base::instance();

// set config / routes
$f3->config('config/config.ini');
$f3->config('config/routes.ini');


// run F3
$f3->run();





