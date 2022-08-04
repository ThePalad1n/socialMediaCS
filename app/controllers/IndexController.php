<?php
class IndexController extends Controller
{
    function index()
    {
        // primary landing page
        // set variables
        echo \Template::instance()->render('index.htm');
    }
}