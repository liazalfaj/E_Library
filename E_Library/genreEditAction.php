<?php
include('models/config.php');

$id = $_POST['idgenre'];
$name= $_POST['namagenre'];
$sql = 
"UPDATE
 t_bookgenre 
 SET 
 genre_name = '$name'
 WHERE
 genre_id = '$id'";
       
$result = mysqli_query($conn,$sql);
   if ($result) {
    } else {
      echo mysqli_error($conn);
      exit();   
    }
    header("location:admin.php");
?>