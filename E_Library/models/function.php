<?php
include('config.php');

function readBooks(){
    global $conn;

    $query = 
    "SELECT b.book_id, b.book_name, b.book_cover, ba.author_name, bl.language_name, b.book_desc, b.book_year, bg.genre_name
    FROM t_books b
    JOIN t_bookauthor ba ON b.book_author = ba.author_id
    JOIN t_booklang bl ON b.book_lang = bl.language_id
    JOIN t_bookgenre bg ON b.book_genre = bg.genre_id
    ORDER BY b.book_name ASC";
    
    $result = mysqli_query($conn, $query);

    return $result;
}

function readBookDetails($id){
    global $conn;

    $query = 
    "SELECT b.book_id, b.book_name, b.book_cover, b.book_file, ba.author_name, bl.language_name, b.book_desc, b.book_year, bg.genre_name
    FROM t_books b
    JOIN t_bookauthor ba ON b.book_author = ba.author_id
    JOIN t_booklang bl ON b.book_lang = bl.language_id
    JOIN t_bookgenre bg ON b.book_genre = bg.genre_id
    WHERE book_id = '$id'";

    $result = mysqli_query($conn, $query);
    return $result;
}

function readAuthor(){
    global $conn;

    $query = "SELECT * from t_bookauthor";

    $result = mysqli_query($conn, $query);
    return $result;
}
function readAuthorDetails($id){
    global $conn;

    $query = "SELECT * from t_bookauthor WHERE author_id = '$id'";

    $result = mysqli_query($conn, $query);
    return $result;
}
function readGenre(){
    global $conn;

    $query = "SELECT * from t_bookgenre";

    $result = mysqli_query($conn, $query);
    return $result;
}
function readGenreDetails($id){
    global $conn;

    $query = "SELECT * from t_bookgenre WHERE genre_id = '$id'";

    $result = mysqli_query($conn, $query);
    return $result;
}
function readLanguage(){
    global $conn;

    $query = "SELECT * from t_booklang";

    $result = mysqli_query($conn, $query);
    return $result;
}
function readLanguageDetails($id){
    global $conn;

    $query = "SELECT * from t_booklang WHERE language_id = '$id'";

    $result = mysqli_query($conn, $query);
    return $result;
}
function readUser(){
    global $conn;

    $query = "SELECT * from t_user";

    $result = mysqli_query($conn, $query);
    return $result;
}
function authorSearch($id){
    global $conn;

    $query = 
    "SELECT b.book_id, b.book_name, b.book_cover, ba.author_name, bl.language_name, b.book_desc, b.book_year, bg.genre_name
    FROM t_books b
    JOIN t_bookauthor ba ON b.book_author = ba.author_id
    JOIN t_booklang bl ON b.book_lang = bl.language_id
    JOIN t_bookgenre bg ON b.book_genre = bg.genre_id
    WHERE b.book_author LIKE '$id'
    ORDER BY b.book_name ASC";
    
    $result = mysqli_query($conn, $query);

    return $result;
}
function languageSearch($id){
    global $conn;

    $query = 
    "SELECT b.book_id, b.book_name, b.book_cover, ba.author_name, bl.language_name, b.book_desc, b.book_year, bg.genre_name
    FROM t_books b
    JOIN t_bookauthor ba ON b.book_author = ba.author_id
    JOIN t_booklang bl ON b.book_lang = bl.language_id
    JOIN t_bookgenre bg ON b.book_genre = bg.genre_id
    WHERE b.book_lang LIKE '$id'
    ORDER BY b.book_name ASC";
    
    $result = mysqli_query($conn, $query);

    return $result;
}
function genreSearch($id){
    global $conn;

    $query = 
    "SELECT b.book_id, b.book_name, b.book_cover, ba.author_name, bl.language_name, b.book_desc, b.book_year, bg.genre_name
    FROM t_books b
    JOIN t_bookauthor ba ON b.book_author = ba.author_id
    JOIN t_booklang bl ON b.book_lang = bl.language_id
    JOIN t_bookgenre bg ON b.book_genre = bg.genre_id
    WHERE b.book_genre LIKE '$id'
    ORDER BY b.book_name ASC";
    
    $result = mysqli_query($conn, $query);

    return $result;
}
function searchBook($string){
    global $conn;

    $query = 
    "SELECT b.book_id, b.book_name, b.book_cover, ba.author_name, bl.language_name, b.book_desc, b.book_year, bg.genre_name
    FROM t_books b
    JOIN t_bookauthor ba ON b.book_author = ba.author_id
    JOIN t_booklang bl ON b.book_lang = bl.language_id
    JOIN t_bookgenre bg ON b.book_genre = bg.genre_id
    WHERE b.book_name LIKE '%$string%'
    ORDER BY b.book_name ASC";
    
    $result = mysqli_query($conn, $query);

    return $result;
}
?>