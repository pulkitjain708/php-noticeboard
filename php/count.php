<?php
include 'db.php';
$sql = "select count(*) from notifs;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $COUNT= $row['count(*)'];
    echo $COUNT;
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>