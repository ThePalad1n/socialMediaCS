<?php
class IndexController extends Controller
{
    function index()
    {
        // primary landing page
        // set variables
        $this->f3->set('title', "Welcome to Shrine");
        echo \Template::instance()->render('index.htm');
    }
}