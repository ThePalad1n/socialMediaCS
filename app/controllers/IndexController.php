lines (158 sloc)  5.74 KB

<?php

class IndexController
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->users = new Users($this->db);
    // }
    function index()
    { 
        echo \Template::instance()->render('index.htm');
     }
}