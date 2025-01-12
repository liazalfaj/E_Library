<?php
include('models/config.php');

$id = $_POST['idbahasa'];
$name= $_POST['namabahasa'];
$sql = 
"INSERT INTO t_booklang (language_id, language_name)
VALUES ('', '$name')";
       
$result = mysqli_query($conn,$sql);
   if ($result) {
    } else {
      echo mysqli_error($conn);
      exit();   
    }
    header("location:admin.php");
?>