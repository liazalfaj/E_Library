<?php
include('models/config.php');

function readTopBook()
{
   global $conn;

    $query = 
    "SELECT b.book_id, b.book_name, b.book_cover, b.book_author, ba.author_name
    FROM t_books b
    JOIN t_bookauthor ba ON b.book_author = ba.author_id
    ORDER BY RAND()
    LIMIT 6";
    
    $result = mysqli_query($conn, $query);

    return $result;
}

$bookList = readTopBook();
// $cover = readBookDetails(1);
// print_r ($cover);
// $test = $cover["book_cover"];
// echo $test;
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
      <title>V-Library</title>
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
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header class="section">
         <!-- header inner -->
         <div class="header">
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
                                 <a class="btn btn-lg btn-primary" size="25% 25% " href="index.php">Logout</a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <section >
         <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
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
                           <div class="carousel-caption ">
                              <h1>Welcome to <strong class="color">Our Library</strong></h1>
                              <p>Ada banyak buku yang dapat kamu baca secara gratis, yang terdiri dari berbagai macam genre</p>
                              <a class="btn btn-lg btn-primary" href="books.php" role="button">Read Now</a>
                              <a class="btn btn-lg btn-primary" href="about.php" role="button">About </a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/librarylogo.png" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Baca dimana saja <strong class="color">dan kapanpun</strong></h1>
                              <p>Hanya dengan menggunakan Internet, kamu bisa membaca buku dimana saja</p>
                              <a class="btn btn-lg btn-primary" href="books.php" role="button">Read Now</a>
                              <a class="btn btn-lg btn-primary" href="about.php" role="button">About</a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box ">
                              <figure><img src="images/librarylogo.png" size="25%" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i></a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
         </div>
      </section>
      <!-- plant -->
      <div id="plant" class="section  product">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2><strong class="black"> Rekomendasi</strong>  Buku</h2>
                     <span>Rekomendasi Buku Terbaik: Temukan koleksi kami yang luas dan temukan kisah menarik, pengetahuan mendalam, dan pengalaman baru yang menginspirasi. Dari fiksi yang menggugah perasaan hingga pandangan dalam tentang dunia, buku-buku pilihan kami akan membawa Anda dalam petualangan membaca yang tak terlupakan. </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
         <div class="clothes_main section ">
          <div class="container">
            <div class="row">
            <?php
              foreach($bookList as $book)
              {
                ?>
               <a class="col-xl-4 col-lg-4 col-md-6 col-sm-12" href="book_detail.php?book_id=<?=$book['book_id']?>">
                  <div class="sport_product">
                     <figure><img src="Stored/cover/<?=$book['book_cover']?>" alt="<?=$book['book_cover']?>"/></figure>
                     <h3><?=$book['book_name']?></h3>
                     <h4><?=$book['author_name']?></h4>
                  </div>
               </a>
               <?php
              } ?>
             </div>
            </div>
           </div>
      </div>
      <!-- end plant -->
      <!--about -->
      <!-- end about -->
      <!--Our  Clients -->
      <div id="plant" class="section_Clients layout_padding padding_bottom_0">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2> Meet our Creator!</h2>
                     <span style="text-align: center;">Website ini dibuat dan didirikan oleh Kelompok 9</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
            <div class="section Clients_2 layout_padding padding-top_0">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">

                        <div id="testimonial" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#testimonial" data-slide-to="0" class="active"></li>
    <li data-target="#testimonial" data-slide-to="1"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="titlepage">
         <div class="john">
            <div class="john_image"></div>
            <div class="john_text">JASON RAFIF PANGESTU SURYOATMOJO<span style="color: #fffcf4;">2204524</span></div>
            <p class="lorem_ipsum_text">"Dengan adanya tugas besar SBD ini saya jadi dapat menghadapi phobia CSS saya, sekaligus jadi lebih apresiasi dan menyukai php, ternyata passing passing ke database asik juga ya wkwkw, mungkin nanti proyek ini bakal di revisit kalau lagi niat"</p>
            <div class="icon_image"><img src="images/icon-1.png"></div>
         </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="titlepage">
         <div class="john">
            <div class="john_image"></div>
            <div class="john_text">SETYAWAN HUMAY SENJA<span style="color: #fffcf4;">2203874</span></div>
            <p class="lorem_ipsum_text">"Dengan adanya tubes sbd ini saya bisa belajar banyak hal, mendapat berbagai macam ilmu. Saya belajar bagaimana caranya ngoding berkelompok."</p>
            <div class="icon_image"><img src="images/icon-1.png"></div>
         </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="titlepage">
         <div class="john">
            <div class="john_image"></div>
            <div class="john_text">AMELIA ZALFA JULIANTI<span style="color: #fffcf4;">2203999</span></div>
            <p class="lorem_ipsum_text">"Tubes SBD ini menambah pengetahuan saya mengenai berbagai macam buku yang ada. Sebuah pengalaman yang seru." </p>
            <div class="icon_image"><img src="images/icon-1.png"></div>
         </div>
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#testimonial" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#testimonial" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
      <!-- end Our  Clients -->
      <!-- start Contact Us-->

      <div class="contact_us_2 layout_padding paddind_bottom_0">
         <div class="container">
            <div class="row">
               <div class="contact_us_3 layout_padding">
            <div class="row">
            </div>
         </div>
            </div>
         </div>
      </div>

      
    <div id="footer" class="Address layout_padding">
       <div class="container">
          <div class="row">
             <div class="col-sm-12">
               <div class="titlepage">
                  <div class="main">
                     <h1 class="address_text">Address</h1>
                  </div>
               </div>
             </div>
          </div>
               <div class="address_2">
                  <div class="row">
                     <div class="col-sm-12 col-md-12 col-lg-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="images/map-icon.png" /></span>
                          <span style="margin-top: 10px;">VirtualLibrary.com</span></div>
                     </div>
                     <div class="col-sm-12 col-md-12 col-lg-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="images/phone-icon.png" /></span>
                          <span style="margin-top: 21px;">( +62 813171316 )</span></div>
                     </div>
                     <div class="col-sm-12 col-md-12 col-lg-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="images/email-icon.png" /></span>
                          <span style="margin-top: 21px;">Vlibrary@gmail.com</span></div>
                     </div>
                     </div> 
                  </div>
               </div>
       </div>
    </div>

      <!-- end Contact Us-->
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
