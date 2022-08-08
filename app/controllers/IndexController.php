<?php
class IndexController extends Controller
{


    function index()
    {
        echo \Template::instance()->render('header.htm');
        echo \Template::instance()->render('index.htm');
    }
}