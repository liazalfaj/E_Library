<?php
include('models/config.php');

$id = $_POST['idgenre'];
$name= $_POST['namagenre'];
$sql = 
"INSERT INTO t_bookgenre (genre_id, genre_name)
VALUES ('', '$name')";
       
$result = mysqli_query($conn,$sql);
   if ($result) {
    } else {
      echo mysqli_error($conn);
      exit();   
    }
    header("location:books.php");
?>