<?php
include('models/config.php');

$id = $_POST['idbahasa'];
$name= $_POST['namabahasa'];
$sql = 
"UPDATE
 t_booklang 
 SET 
 language_name = '$name'
 WHERE
 language_id = '$id'";
       
$result = mysqli_query($conn,$sql);
   if ($result) {
    } else {
      echo mysqli_error($conn);
      exit();   
    }
    header("location:admin.php");
?>