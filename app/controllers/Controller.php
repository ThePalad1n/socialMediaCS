<?php
class Controller {
	protected $f3;
    protected $db;
    
    function __construct(){
        // grab instance of F3
        $f3 = Base::instance();
        $this->f3 = $f3;
        
        $db=new DB\SQL(
            'mysql:host=localhost;port=3306;dbname=mysocial','root',''
          );
          $f3->set('result',$db->exec('SELECT id, created, title, content, author, imageurl  FROM post'));
    }
}