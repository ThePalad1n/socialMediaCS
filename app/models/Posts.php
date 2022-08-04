<?php

class Posts {
    protected $db;

    public function __construct(DB\SQL $db) {
        // connect model to db
        $this->db = $db;
    }

    public function getNewsfeedPosts($id, $page=0){
        $offset = $page * 25;
        $sql = "SELECT 
                    p.post_id
                    , p.created
                    , p.title
                    , u.content
                    , u.author 
                    , u.image_URL
                FROM post WHERE id = ?
                LIMIT 25
                OFFSET :offset";
        $result = $this->db->exec($sql, array(":post"=>$id, ":offset"=>$offset));
        return $result;
    }
    
    public function add($feed_text,$post){
        $data = array(":content"=>$feed_text, ":post"=>$post);
        $result = $this->db->exec('INSERT INTO post (content, post_id) VALUES(:content, :post)', $data);
    
        return $result;
        }

    // Remove Post with id of $post_id
    // public function remove($post_id) {
    //     $data = array(":post_id"=>$post_id);
    //     $sql = "DELETE FROM post WHERE post_id = :post_id";
    //     $result = $this->db->exec($sql, $data);
    //     return $result;
    // }


}