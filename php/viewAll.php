<?php
include 'db.php';
$query = 'select * from notifs;';
$result = mysqli_query($conn, $query);
$json;
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $json[]= $row; 
  }
  echo json_encode($json);
} else {
  echo "0 results";
}

mysqli_close($conn);
?>