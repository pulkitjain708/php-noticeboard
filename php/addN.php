
<?php
    include 'db.php';
        $by=$_POST['by'];
        $forSt=$_POST['forSt'];
        $meta=$_POST['meta'];
        $category=$_POST['cats'];
        $title=$_POST['title'];
        $description=$_POST['desc'];
        $link=$_POST['links'];
        $expiry=$_POST['expiry'];
    if(isset($by) && isset($forSt) &&
    isset($meta) && isset($category) &&
    isset($title) && isset($description) &&
    isset($expiry) && isset($link) 
    ){
      if(!empty($by) && !empty($forSt) && !empty($meta) && !empty($category) && !empty($title) && !empty($description) && !empty($by) && !empty($link) && !empty($expiry)){
      $arr=explode('-',$expiry);
      $valid_date=checkdate($arr[1],$arr[2],$arr[0]);
      if($valid_date==1){
        $today=strtotime(date('Y-m-d'));
        $after= strtotime($expiry);
        if ($today<=$after){
          $result=$conn->query("select count(*) from notifs;");
   $len=$result->fetch_assoc()['count(*)']+1;
    $insert_query='insert into notifs values('.$len. ',"'
    .$by.'",' . '"'.$forSt.'",' . '"'.$meta.'",' .
    '"'.$category.'",' . '"'.$title.'",' . '"'.$description.'",'.
    '"'.$link.'",' . '"'.$expiry.'"'. ');';   
    if ($conn->query($insert_query) === TRUE) {
            echo "<script>alert('New record created successfully');window.history.back();</script>";
          } else {
            echo  $conn->error;
          }   
}
else{
  echo '<script>alert(" You must publish notifications after todays date");</script>';
}
}
else{
  echo '<script>alert("Enter Valid Date");</script>';
}
      }
else{
  echo '<script>alert("Fields cant be empty")</script>';
}
  }
      // close mysql connection
    $conn->close();
?>