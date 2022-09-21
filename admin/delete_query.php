<?php
include 'conn.php';

  $que_id = $_GET['id'];
$sql= "UPDATE contact_query SET query_status = 1";
$result=mysqli_query($conn,$sql);
header("Location: pending_query.php");
mysqli_close($conn);

 ?>
