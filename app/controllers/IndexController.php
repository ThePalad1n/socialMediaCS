<?php

class IndexController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->posts = new Posts($this->db);
    }
    function index()
    {
        // primary landing page
        // set variables
        $this->f3->set('title', "Welcome to Shrine");

        // serve content
        
        echo \Template::instance()->render('index.htm');

    }
    function newsfeed()
    {
        $this->f3->set('title', 'Bee Boop');
        // get user ID
        $posts = $this->posts->getNewsfeedPosts();
        // set results to f3
        $this->f3->set('result', $posts);
        // create and deliver template
        echo \Template::instance()->render('postpage.htm');
    }
}


