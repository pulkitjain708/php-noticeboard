<?php
include 'db.php';
$for=$_POST['for'];
$by=$_POST['by'];
$category=$_POST['category'];
$title=$_POST['title'];
$from = $_POST['from'];
$to=$_POST['to'];
$expiry=$_POST['expiry'];
$where='';
$first='select * from notifs where ';
if(isset($for) && !empty($for))
$where=$where.'forName = "'.$for.'"';
if(isset($by) && !empty($by))
$where=$where.' and byName = "'.$by.'"';
if(isset($category) && !empty($category))
$where=$where.' and category = "'.$category.'"';
if(isset($title) && !empty($title))
$where=$where.' and title like "%'.$title.'%"';
if(isset($from) && isset($to) && !empty($from) && !empty($to))
$where=$where.' and expiry between "'.$from.'" and "'.$to.'"';
else
$where=$where.' and expiry = "'.$expiry.'"';
$final=$first.$where.';';
//echo $final;
$result = mysqli_query($conn, $final);
$json;
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $json[]= $row; 
  }
  echo json_encode($json);
} else {
  echo json_encode(0);
}
// echo $final;
mysqli_close($conn);
?>