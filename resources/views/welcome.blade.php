<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Virtual Alquran </title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>


    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="/">Virtual Al-Quran</a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <form action="/"> 
              <div class="input-group rounded">
                  <input type="search" class="form-control rounded" placeholder="Cari Surah" name="search" aria-label="Search" aria-describedby="search-addon" />
              
                   <button class="btn btn-primary"> <i class="fa fa-search"></i></button>
  
                </div></form>
          </div>
          
        </div>
      </nav>
      <section class="py-0">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/dot.png);background-position:left;background-size:auto;margin-top:-105px;">
        </div>
        <!--/.bg-holder-->

        <div class="container position-relative">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-md-1 pt-8"><img class="img-fluid" src="assets/img/images-iconbg.png" alt="" style="border-radius: 5%"/></div>
            <div class="col-md-7 col-lg-6 text-center text-md-start pt-5 pt-md-9">
              <h1 class="mb-4 display-3 fw-bold">Virtual Quran for you.</h1>
              <p class="mt-3 mb-4 fs-1">Alquran adalah pedoman bagi seluruh umat manusia. M.Quraish Shihab menyampaikan bahwa yang dimaksud dengan tuntunan adalah tuntunan agama atau hukum Islam,<br class="d-none d-lg-block" />yaitu aturan yang mengatur dunia dan keselamatan hidup di masa yang akan datang. Aturannya adalah arah jalan yang lurus.<br><br><br><a class="btn btn-lg btn-primary rounded-pill hover-top" href="#surah" role="button">Baca Alquran Yuk !</a>
            </div>
          </div>
        </div>
      </section>
      <section class="py-8" id="surah">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/services-bg.png);background-position:center left;background-size:auto;">
        </div>
        <!--/.bg-holder-->

        <div class="bg-holder" style="background-image:url(assets/img/illustrations/dot-2.png);background-position:center right;background-size:auto;margin-left:-180px;margin-top:20px;">
        </div>
        <!--/.bg-holder-->

        <div class="container-lg">
          <div class="row justify-content-center">
            <div class="col-3 text-center">
              <h2 class="fw-bold">Daftar Surah</h2>
              <hr class="w-25 mx-auto text-dark" style="height:2px;" />
            </div>
          </div>
          
          <div class="row justify-content-center h-100 pt-7 g-4" style="margin-top: -100px">
              @foreach ($resultdata as $item)
            <div class="col-sm-9 col-md-4">
              <div class="card h-100 w-100 shadow rounded-lg p-3 p-md-2 p-lg-3 p-xl-5">
                <div class="card-body text-center text-md-start">
                  <div class="py-3"> <h4 class="fw-bold card-title">{{$item['asma']}}</h4></div>
                  <div class="py-3">
                    <h4 class="fw-bold card-title">{{$item['nama']}}</h4>
                  <a href="/detail/surah/{{$item['nomor']}}"><button class="btn btn-success">Bacalah</button></a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            
            
            
            
            
          </div>
        </div>
      </section>
     


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      
      <!-- <section> close ============================-->
      <!-- ============================================-->


     
      
     


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-2">

        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="text-center">
                <p class="mb-0">&copy; Developed with&nbsp;
                  <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#458FF6" viewBox="0 0 16 16">
                    <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                  </svg>&nbsp;by&nbsp;<a class="text-black" href="#" target="_blank">Surya Kindi </a>
                </p>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500&amp;display=swap" rel="stylesheet">
  </body>

</html>