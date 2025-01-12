<?php
include('models/config.php');
$id = $_GET['book_id'];

$sql = "DELETE FROM t_books WHERE book_id = '$id'";

$result = mysqli_query($conn,$sql);
   if ($result) {
    } else {
      echo mysqli_error($conn);
      exit();   
    }
    header("location:admin.php");
?>
