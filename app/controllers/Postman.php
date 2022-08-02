<?php
class Postman extends Controller
{
    public function __construct(){
        /**
         * dmController relies on base controller to:
         * -instanciate the $this->f3 instance
         * -create db connection under $this->f3->set('db')
         * -Set some form of user ID variable in $this->f3 as the current user's id
         */
        parent::__construct();

        //Initialize Message and Users model
        $this->users = new Posters($this->db);

    }
    //Beginning of user profile
    public function postman(): void
    {
        

        echo \Template::instance()->render('post.htm');
    }
}