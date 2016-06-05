<?php

require_once('database.class.php');

class Loadmore {

	public function __construct(){
		$this->db = new database();
	}
    
    public function getTotals()
	{
        $sql = "SELECT COUNT(*) FROM posts";
		$this->db->query($sql);
		return $this->db->rowCount();
	}

    public function getPosts($offset=0,$posts_per_page=2)
	{

        $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT :offset, :posts_per_page"; //=LIMIT posts_per_page OFFSET offset
		$this->db->query($sql);
        $this->db->bind(':offset', $offset, PDO::PARAM_INT);
        $this->db->bind(':posts_per_page', $posts_per_page, PDO::PARAM_INT);
		return $this->db->resultset();
	}


        


}
?>