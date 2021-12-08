<?php
include 'db.php';
       // $by=$_POST['by'];
       // $forSt=$_POST['for'];
        $meta=$_POST['meta'];
       // $category=$_POST['category'];
        $title=$_POST['title'];
        $description=$_POST['desc'];
        $link=$_POST['link'];
        $expiry=$_POST['expiry'];
        $idNot=$_POST['idNot'];
        $update_query_first='update notifs set';
        $update_query_last='where id = '.$idNot.';';
        $update_query_middle='';
        if(isset($by) && !empty($by))
        $update_query_middle=$update_query_middle.' byName="'.$by.'",';
        if(isset($forSt) && !empty($forSt))
        $update_query_middle=$update_query_middle.' forName="'.$forSt.'",';
        if(isset($meta) && !empty($meta))
        $update_query_middle=$update_query_middle.' meta="'.$meta.'",';
        if(isset($category) && !empty($category))
        $update_query_middle=$update_query_middle.' category="'.$category.'",';
        if(isset($link) && !empty($link))
        $update_query_middle=$update_query_middle.' link="'.$link.'",';
        if(isset($expiry) && !empty($expiry))
        $update_query_middle=$update_query_middle.' expiry="'.$expiry.'",';
        if(isset($title) && !empty($title))
        $update_query_middle=$update_query_middle.' title="'.$title.'",';
        if(isset($description) && !empty($description))
        $update_query_middle=$update_query_middle.' description="'.$description.'"';
        $update_query=$update_query_first.$update_query_middle.$update_query_last;
       

        if ($conn->query($update_query) === TRUE) {
            echo "<script>alert('Record updated successfully');</script>";
          } else {
            echo "Error updating record: " . $conn->error;
          }
          
          $conn->close();
?>