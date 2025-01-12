<?php
include('models/config.php');

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

$sql = "INSERT INTO t_books (book_name, book_author, book_lang, book_desc, book_genre, book_cover, book_file, book_year) VALUES
    ('$name','$author','$lang','$desc','$genre','$cover', '$file', '$tahun')";
            
    $result = mysqli_query($conn,$sql);
   if ($result) {
    } else {
      echo mysqli_error($conn);
      exit();   
    }
    header("location:books.php");
?>