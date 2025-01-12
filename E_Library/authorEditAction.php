<?php
include('models/config.php');

$id = $_POST['idauthor'];
$name= $_POST['namaauthor'];
$desc= $_POST['deskripsiauthor'];
$sql = 
"UPDATE
 t_bookauthor 
 SET 
 author_name = '$name', author_desc = '$desc'
 WHERE
 author_id = '$id'";
       
$result = mysqli_query($conn,$sql);
   if ($result) {
    } else {
      echo mysqli_error($conn);
      exit();   
    }
    header("location:admin.php");
?>