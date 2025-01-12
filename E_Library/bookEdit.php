<?php
include('models/function.php');

$id = $_GET['book_id'];
$res = readBookDetails($id);
$book = mysqli_fetch_assoc($res);

$author = readAuthor();
$genre = readGenre();
$bahasa = readLanguage();

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
      <title>Add New Book</title>
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
		<style>
		  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
		  * {
			 margin: 0;
			 padding: 0;
			 box-sizing: border-box;
		  }
		  body {
			 font-family: "Inter", sans-serif;
		  }
		  .formbold-main-wrapper {
			 display: flex;
			 align-items: center;
			 justify-content: center;
			 padding: 48px;
		  }
		
		  .formbold-form-wrapper {
			 margin: 0 auto;
			 max-width: 550px;
			 width: 100%;
			 background: white;
		  }
		
		  .formbold-input-flex {
			 display: flex;
			 gap: 20px;
			 margin-bottom: 22px;
		  }
		  .formbold-input-flex > div {
			 width: 50%;
			 display: flex;
			 flex-direction: column-reverse;
		  }
		  .formbold-textarea {
			 display: flex;
			 flex-direction: column-reverse;
		  }
		
		  .formbold-form-input {
			 width: 100%;
			 padding-bottom: 10px;
			 border: none;
			 border-bottom: 1px solid #DDE3EC;
			 background: #FFFFFF;
			 font-weight: 500;
			 font-size: 16px;
			 color: #07074D;
			 outline: none;
			 resize: none;
		  }
		  .formbold-form-input::placeholder {
			 color: #536387;
		  }
		  .formbold-form-input:focus {
			 border-color: #6A64F1;
		  }
		  .formbold-form-label {
			 color: #07074D;
			 font-weight: 500;
			 font-size: 14px;
			 line-height: 24px;
			 display: block;
			 margin-bottom: 18px;
		  }
		  .formbold-form-input:focus + .formbold-form-label {
			 color: #6A64F1;
		  }
		
		  .formbold-input-file {
			 margin-top: 30px;
		  }
		  .formbold-input-file input[type="file"] {
			 position: absolute;
			 top: 6px;
			 left: 0;
			 z-index: -1;
		  }
		  .formbold-input-file .formbold-input-label {
			 display: flex;
			 align-items: center;
			 gap: 10px;
			 position: relative;
		  }
		
		  .formbold-filename-wrapper {
			 display: flex;
			 flex-direction: column;
			 gap: 6px;
			 margin-bottom: 22px;
		  }
		  .formbold-filename {
			 display: flex;
			 align-items: center;
			 justify-content: space-between;
			 font-size: 14px;
			 line-height: 24px;
			 color: #536387;
		  }
		  .formbold-filename svg {
			 cursor: pointer;
		  }
		
		  .formbold-btn {
			 font-size: 16px;
			 border-radius: 5px;
			 padding: 12px 25px;
			 border: none;
			 font-weight: 500;
			 background-color: #6A64F1;
			 color: white;
			 cursor: pointer;
			 margin-top: 25px;
		  }
		  .formbold-btn:hover {
			 box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
		  }
		
		  
		</style>
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
                     <center><h2><strong class="black"> Form</strong>  Buku</h2></center>
                  </div>
               </div>
            </div>
         </div>
      </div>
		<div class="formbold-main-wrapper">
			<!-- Author: FormBold Team -->
			<!-- Learn More: https://formbold.com -->
			<div class="formbold-form-wrapper">
			  <form action="bookEditAction.php" method="POST" enctype="multipart/form-data">
					<div class="formbold-input-flex">
						<input type="hidden" name="idbuku" id="idbuku" value="<?=$id?>"/>
					  <div>
							<input type="text" name="judulbuku" id="judulbuku" class="formbold-form-input" value="<?=$book['book_name']?>"/>
							<label for="judulbuku" class="formbold-form-label"> Nama Buku </label>
					  </div>
					  <div>
							<select id="author" name ="author" style="width: 100%" hidden value="<?=$book['author_name']?>">
							<?php
                				foreach ($author as $thor){
                    			echo "<option ".($book['author_name'] == $thor['author_name'] ? "selected" : "")." value=$thor[author_id]>" . $thor['author_name'] . "</option>";
                				}            
            				?>
							</select>
							<label for="author" class="formbold-form-label"> Penulis </label>
					  </div>
					</div>
					<div class="formbold-input-flex">
					  <div>
					  		<select id="genre" name ="genre" style="width: 100%" hidden>
							<?php
                				foreach ($genre as $gen){
								echo "<option ".($book['genre_name'] == $gen['genre_name'] ? "selected" : "")." value=$gen[genre_id]>" . $gen['genre_name'] . "</option>";
                				}            
            				?>
							</select>
							<label for="genre" class="formbold-form-label"> Genre </label>
					  </div>
					  <div>
					  <select id="bahasa" name ="bahasa" style="width: 100%" hidden>
							<?php
                				foreach ($bahasa as $bah){
								echo "<option ".($book['language_name'] == $bah['language_name'] ? "selected" : "")." value=$bah[language_id]>" . $bah['language_name'] . "</option>";
                				}            
            				?>
							</select>
							<label for="bahasa" class="formbold-form-label"> Bahasa </label>
					  </div>
					</div>
		 
					<div class="formbold-textarea">
						 <input type = "text" name="tahunterbit" id="tahunterbit" class="formbold-form-input" value="<?=$book['book_year']?>">
						 <label for="tahunterbit" class="formbold-form-label"> Tahun terbit </label>
					</div>
					
					<br>
					<div class="formbold-textarea">
						<textarea rows="6" name="deskripsi" id="deskripsi" class="formbold-form-input" placeholder="<?=$book['book_desc']?>"></textarea>
						<label for="deskripsi" class="formbold-form-label"> Deskripsi Buku </label>
				  </div>
				  <div class="formbold-input-flex">
					  <div>
							<input type="file" accept=".jpeg, .png, .jpg" name="cover" id="cover" require />
							<label for="cover" class="formbold-form-label"> Cover Buku </label>
					  </div>
				  </div>
				  <div class="formbold-input-flex">
					  <div>
							<input type="file" accept=".pdf" name="file" id="file" require/>
							<label for="file" class="formbold-form-label"> File Buku </label>
					  </div>
				  </div>
		 
					<button class="formbold-btn"> Update </button>
					<button class="formbold-btn"> Cancel </button>
			  </form>
			</div>
		 </div>
      <section >
         <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="sporrt_text">The best books in our list</h1>
                              <p  class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</p>
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
         </div>
      </section>
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
