<?php
include('models/config.php');

$id = $_POST['idauthor'];
$name= $_POST['namaauthor'];
$desc= $_POST['deskripsiauthor'];
$sql = 
"INSERT INTO t_bookauthor (author_id, author_name, author_desc)
VALUES ('', '$name', '$desc')";
       
$result = mysqli_query($conn,$sql);
   if ($result) {
    } else {
      echo mysqli_error($conn);
      exit();   
    }
    header("location:books.php");
?>