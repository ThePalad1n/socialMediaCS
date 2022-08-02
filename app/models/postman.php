<?php

class Posters {
    protected $db;

    public function __construct(DB\SQL $db){
        // connect model to db
        $this->db = $db;
    }

    public function getUserById($id){
        $sql = "SELECT * FROM user WHERE user_id=:id";
        $data = array(":id"=>$id);
        $result = $this->db->exec($sql, $data);
        return $result;
    }


    
}