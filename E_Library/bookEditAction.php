<?php
include('models/config.php');

$id = $_POST['idbuku'];
$name= $_POST['judulbuku'];
$author=$_POST['author'];
$genre=$_POST['genre'];
$lang=$_POST['bahasa'];
$tahun=$_POST['tahunterbit'];
$desc=$_POST['deskripsi'];
$cover=$_FILES['cover']['name'];
$file=$_FILES['file']['name'];
$dirCover = "Stored/cover/";
$tmpCV = $_FILES['cover']['tmp_name'];
move_uploaded_file($tmpCV, $dirCover.$cover);

$dirFile = "Stored/book/";
$tmpBook = $_FILES['file']['tmp_name'];
move_uploaded_file($tmpBook, $dirFile.$file);

$sql = 
"UPDATE
 t_books 
 SET 
 book_name = '$name', book_author = '$author', book_lang = '$lang', book_desc = '$desc', book_genre = '$genre', book_cover = '$cover', book_file = '$file', book_year = '$tahun'
 WHERE
 book_id = '$id'";
       
$result = mysqli_query($conn,$sql);
   if ($result) {
    } else {
      echo mysqli_error($conn);
      exit();   
    }
    header("location:admin.php");
?>