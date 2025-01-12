<?php
include('models/function.php');

$genre = readGenre();
$author = readAuthor();
$language = readLanguage();

if(isset($_GET['genre'])){
   $id = $_GET['genre'];
   $bookList = genreSearch($id);
}else if(isset($_GET['author'])){
   $id = $_GET['author'];
   $bookList = authorSearch($id);
}else if(isset($_GET['language'])){
   $id = $_GET['language'];
   $bookList = languageSearch($id);
}else if(isset($_GET['search'])){
   $string = $_GET['search'];
   $bookList = searchBook($string);
}
else{
   $bookList = readBooks();
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Books list</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout product_pagr">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header class="section">
         <!-- header inner -->
        <div class="header_main">
         <div class="header_main">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                        <div class="logo"> <a href="home.php"><h1><strong class="color">Virtual Library</strong></h1></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li> <a href="home.php">Home</a> </li>
                                 <li> <a href="about.php">About</a> </li>
                                 <li><a href="books.php">Books</a></li>
                                 <li>
                                   <div class="header-search">
                                     <input type="text" placeholder="Search for Books" id="searchInput">
                                   </div>
                                 </li>
                                 <li class="last">
                                   <a href="#" id="searchButton">
                                     <img src="images/search_icon.png" alt="icon"/>
                                   </a>
                                 </li>

                                 <script>
                                   document.getElementById("searchButton").addEventListener("click", function() {
                                     var searchText = document.getElementById("searchInput").value;
                                     var encodedText = encodeURIComponent(searchText);
                                     window.location.href = "books.php?search=" + encodedText;
                                   });
                                 </script>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      </header>
      <!-- end header -->

      <!-- <div id="plant" class="section  product">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <center><h2><strong class="black">Lorem</strong></h2></center>
                  </div>
               </div>
            </div>
         </div>
      </div> -->

       <!-- plant -->
      <div id="plant" class="section  product">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage" style="padding: 0px 0px 10px;">
                     <center><h2><strong class="black"> List</strong>  Buku</h2></center>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <center><a class="btn btn-lg btn-primary" size="50% 50% " href="bookCreate.php">Tambah Buku</a></center>
      <br><br>
		<center><table>
         <tr>
            <th>No</th>
            <th>Nama Buku</th>
            <th>Penulis</th>
            <th>Genre</th>
            <th>Bahasa</th>
            <th>Tanggal terbit</th>
            <th>File Buku</th>
         </tr>
         <?php 
         $index = 1;
         foreach ($bookList as $book){?>
			<tr>
				<td><?=$index?></td>
				<td><?=$book['book_name']?></td>
				<td><?=$book['author_name']?></td>
				<td><?=$book['genre_name']?></td>
				<td><?=$book['language_name']?></td>
				<td><?=$book['book_year']?></td>
				<td><a href="book_detail.php?book_id=<?=$book['book_id']?>">Baca Sekarang</a></td>
			</tr>
         <?php $index++; } ?>
		</table></center>
      <div id="plant" class="section  product">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage" style="padding: 0px 0px 10px;">
                     <center><h2><strong class="black"> Pilih</strong>  Genre</h2></center>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="plant" class="section  product" style="padding:20px">
      <section id="produk">
      <?php foreach ($genre as $g) { ?>
        <a href="books.php?genre=<?=$g['genre_id']?>" class="voucher">
          <input type="radio" id="<?=$g['genre_name']?>" name="select" value="<?=$g['genre_id']?>">
          <label for="<?=$g['genre_name']?>">
            <h2 class="nama_produk"><?=$g['genre_name']?></h2>
          </label>
        </a>
      <?php } ?>
      </section>
      </div>
      <div id="plant" class="section  product">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage" style="padding: 0px 0px 10px;">
                     <center><h2><strong class="black"> Pilih</strong>  Author</h2></center>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="plant" class="section  product" style="padding:20px">
      <section id="produk">
      <?php foreach ($author as $a) { ?>
        <a href="books.php?author=<?=$a['author_id']?>" class="voucher">
          <input type="radio" id="<?=$a['author_name']?>" name="select" value="<?=$a['author_id']?>">
          <label for="<?=$a['author_name']?>">
            <h2 class="nama_produk"><?=$a['author_name']?></h2>
          </label>
        </a>
      <?php } ?>
      </section>
      </div>
      <div id="plant" class="section  product">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage" style="padding: 0px 0px 10px;">
                     <center><h2><strong class="black"> Pilih</strong>  Bahasa</h2></center>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="plant" class="section  product" style="padding:20px">
      <section id="produk">
      <?php foreach ($language as $l) { ?>
        <a href="books.php?language=<?=$l['language_id']?>" class="voucher">
          <input type="radio" id="<?=$l['language_name']?>" name="select" value="<?=$l['language_id']?>">
          <label for="<?=$l['language_name']?>">
            <h2 class="nama_produk"><?=$l['language_name']?></h2>
          </label>
        </a>
      <?php } ?>
      </section>
      </div>
      <!-- end plant -->
      
     <!-- footer start-->
      <div id="plant" class="footer layout_padding">
         <div class="container">
            <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
         </div>
      </div>

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 


</body>
</html>