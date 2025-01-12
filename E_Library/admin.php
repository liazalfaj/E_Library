<?php
session_start();

// Check if the user is not logged in as admin
if (!isset($_SESSION['admin'])) {
   echo "
   <script>
   alert('Anda bukan admin, login ulang sebagai Admin');
   document.location.href = 'index.php';
   </script>"; // Redirect to the index page
   exit();
}

// Check if the logged-in user is not the admin
if ($_SESSION['admin'] !== true) {
   echo "
   <script>
   alert('Anda bukan admin, login ulang sebagai Admin');
   document.location.href = 'index.php';
   </script>"; // Redirect to the login page
   exit();
}

include('models/function.php');
$bookList = readBooks();
$genreList = readGenre();
$authorList = readAuthor();
$languageList = readLanguage();
$userList = readUser();

?><!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Admin Page</title>
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
   <body class="main-layout about_pape">
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
            <!--about -->
       <div class="section about ">
         <div class="container">
             <div class="row">
                <div class="col-12">
                    <div class="titlepage">
                     <h2><strong class="black"><center>Admin Page</center></strong></h2>
                     <!-- <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</span> -->
                  </div>
                </div>
             </div>
         </div>
      </div>
      <section >
			<center><a class="btn btn-lg btn-primary" size="50% 50%" style="margin-bottom: 6px;" href="bookCreate.php">NEW</a><table>
				<tr>
					<th colspan = 8>
						DATA BUKU
					</th>
               <tr>
					<th>ID Buku</th>
					<th>Nama Buku</th>
					<th>Penulis</th>
					<th>Bahasa</th>
					<th>Genre</th>
					<th>File Buku</th>
					<th>Tanggal Terbit</th>
               <th>Action</th>
				</tr>
				</tr>
            <?php foreach ($bookList as $b){ ?>
				<tr>
					<td><?=$b['book_id']?></td>
					<td><?=$b['book_name']?></td>
					<td><?=$b['author_name']?></td>
					<td><?=$b['language_name']?></td>
					<td><?=$b['genre_name']?></td>
					<td><a href="book_detail.php?book_id=<?=$b['book_id']?>">File Buku</a></td>
               <td><?=$b['book_year']?></td>
					<td>
                  <a href="bookEdit.php?book_id=<?=$b['book_id']?>">Edit</a>
                  <a href="bookDelete.php?book_id=<?=$b['book_id']?>" onclick="return confirmDelete()">Delete</a>
                  <script>
                  function confirmDelete() {
                    const result = confirm("Are you sure you want to delete this item?");
                  
                    if (result) {
                      // User clicked "OK"
                      return true;  // Proceed with the link click
                    } else {
                      // User clicked "Cancel" or closed the confirmation dialog
                      return false;  // Cancel the link click
                    }
                  }
                  </script>
               </td>
            </tr>
            <?php } ?>
			</table></center>
			<br>
			<br>
         <center><a class="btn btn-lg btn-primary" size="50% 50%" style="margin-bottom: 6px;" href="genreCreate.php">NEW</a><table>
            <tr>
				   <th colspan = 3>
				   		DATA GENRE
				   </th>
				<tr>
					<th>ID Genre</th>
					<th>Nama Genre</th>
					<th>Action</th>
				</tr>
				</tr>
            <?php foreach ($genreList as $g){ ?>
				<tr>
					<td><?=$g['genre_id']?></td>
					<td><?=$g['genre_name']?></td>
					<td>
                  <a href="genreEdit.php?genre_id=<?=$g['genre_id']?>">Edit</a>
                  <a href="genreDelete.php?genre_id=<?=$g['genre_id']?>" onclick="return confirmDelete()">Delete</a>

                  <script>
                  function confirmDelete() {
                    const result = confirm("Are you sure you want to delete this item?");
                  
                    if (result) {
                      // User clicked "OK"
                      return true;  // Proceed with the link click
                    } else {
                      // User clicked "Cancel" or closed the confirmation dialog
                      return false;  // Cancel the link click
                    }
                  }
                  </script>
               </td>
            </tr>
            <?php } ?>
			</table></center>
         <br>
         <br>
         <center><a class="btn btn-lg btn-primary" size="50% 50%" style="margin-bottom: 6px;" href="authorCreate.php">NEW</a><table>
               <th colspan = 4>
						DATA AUTHOR
					</th>
				<tr>
					<th>ID AUTHOR</th>
					<th>Nama Author</th>
					<th>Deskripsi Author</th>
					<th>Action</th>
				</tr>
				</tr>
            <?php foreach ($authorList as $a){ ?>
				<tr>
					<td><?=$a['author_id']?></td>
					<td><?=$a['author_name']?></td>
					<td><?=$a['author_desc']?></td>
					<td>
                  <a href="authorEdit.php?author_id=<?=$a['author_id']?>">Edit</a>
                  <a href="authorDelete.php?author_id=<?=$a['author_id']?>" onclick="return confirmDelete()">Delete</a>

                  <script>
                  function confirmDelete() {
                    const result = confirm("Are you sure you want to delete this item?");
                  
                    if (result) {
                      // User clicked "OK"
                      return true;  // Proceed with the link click
                    } else {
                      // User clicked "Cancel" or closed the confirmation dialog
                      return false;  // Cancel the link click
                    }
                  }
                  </script>
               </td>
            </tr>
            <?php } ?>
			</table></center>
         <br>
         <Br>
         <center><a class="btn btn-lg btn-primary" size="50% 50%" style="margin-bottom: 6px;" href="languageCreate.php">NEW</a><table>
            <tr>
				   <th colspan = 3>
				   		DATA BAHASA
				   </th>
				<tr>
					<th>ID Bahasa</th>
					<th>Nama Bahasa</th>
					<th>Action</th>
				</tr>
				</tr>
            <?php foreach ($languageList as $l){ ?>
				<tr>
					<td><?=$l['language_id']?></td>
					<td><?=$l['language_name']?></td>
					<td>
                  <a href="languageEdit.php?language_id=<?=$l['language_id']?>">Edit</a>
                  <a href="languageDelete.php?language_id=<?=$l['language_id']?>" onclick="return confirmDelete()">Delete</a>

                  <script>
                  function confirmDelete() {
                    const result = confirm("Are you sure you want to delete this item?");
                  
                    if (result) {
                      // User clicked "OK"
                      return true;  // Proceed with the link click
                    } else {
                      // User clicked "Cancel" or closed the confirmation dialog
                      return false;  // Cancel the link click
                    }
                  }
                  </script>
               </td>
            </tr>
            <?php } ?>
			</table></center>
         <br>
         <br>
			<center><table>
				<tr>
					<th colspan = 3>
						USERS
					</th>
				<tr>
					<th>ID User</th>
					<th>Username</th>
					<th>Action</th>
				</tr>
				<tr> <?php foreach ($userList as $u){ ?>
				<tr>
					<td><?=$u['user_id']?></td>
					<td><?=$u['username']?></td>
					<td>
                  <a href="ban.php?user_id=<?=$u['user_id']?>">Ban User</a>
               </td>
            </tr>
            <?php } ?>
			</table></center>
         <!-- <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="sporrt_text">Best sports item shop our</h1>
                              <p  class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</p>
                              <div class="btn_main">
                                 <a class="btn btn-lg btn-primary" href="#" role="button">Read More</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/child-image.png" style="max-width: 100%; border: 15px solid #fff;"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="sporrt_text">Best sports item shop our</h1>
                              <p  class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</p>
                              <div class="btn_main">
                                 <a class="btn btn-lg btn-primary" href="#" role="button">Read More</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box ">
                              <figure><img src="images/child-image.png" style="max-width: 100%; border: 15px solid #fff;"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="sporrt_text">Best sports item shop our</h1>
                              <p  class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</p>
                              <div class="btn_main">
                                 <a class="btn btn-lg btn-primary" href="#" role="button">Read More</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/child-image.png" style="max-width: 100%; border: 15px solid #fff;"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
      </section>

      </div>
      <!--end about -->

      <!-- footer start-->
      <div class="copyright_text">
      <div id="plant" class="footer layout_padding">
         <div class="container">
            <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
         </div>
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
