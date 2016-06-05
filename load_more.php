<?php
 if(isset($_POST["click"]) && is_numeric($_POST["click"])){  
     
        require('includes/loadmore.class.php');
        $obj = new loadmore();
        //$count = $obj->getTotals();
        $start = $_POST["click"] * $posts_per_page;
        $results=$obj->getPosts($start,$posts_per_page);
        
       //output results
        foreach($results as $result){ //fetch values
           print '<li id="post_'.$result['id'].'"><span class="post_title">'.$result['title'].'</span></li>';	
        }

  }





?>