<?php
include 'db.php';
$id=$_POST['id'];
$query="delete from notifs where id =".$id.";";
if ($conn->query($query) === TRUE) {
    echo 1;
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();
?>