<?php
include('models/config.php');
$id = $_GET['genre_id'];

$sql = "DELETE FROM t_bookgenre WHERE genre_id = '$id'";

$result = mysqli_query($conn,$sql);
   if ($result) {
    } else {
      echo mysqli_error($conn);
      exit();   
    }
    header("location:admin.php");
?>
