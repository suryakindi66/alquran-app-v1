<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Surah {{$resultalldata['nama']}}</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="//assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="/assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>


    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="/">Al-Quran</a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        
               <a href="/"> <button type="button" class="btn btn-outline-primary">Home</button></a>
      
          </div>
        </div>
      </nav>
      <section class="py-0">
       
        <!--/.bg-holder-->

        
      </section>
      <section class="py-8">
       
        <!--/.bg-holder-->

        
        <!--/.bg-holder-->

        <div class="container-lg">
          <div class="row justify-content-center">
            <div class="col-3 text-center">
              <h2 class="fw-bold">{{$resultalldata['nama']}}</h2>
              <hr class="w-25 mx-auto text-dark" style="height:2px;" />
            </div>
          </div>
          <h5 class="fw-bold">Audio</h5>
          <audio controls>
            <source src="{{$resultalldata['audio']}}" type="audio/mpeg">
          Your browser does not support the audio element.
          </audio>
          
          <hr><hr>
          <?php $no=1;?>
          @foreach($resultdetailsurah as $item)
          <div class="col-md-11"><div id="alert-2"></div>
        <p align="right" style="line-height:60px;font-size:30px;" class="h5 g-color-black g-font-weight-400 arab" dir="rtl" lang="ar">{{$item['ar']}}-{{$no++}}</p><br><br>
        <p class="h5 g-color-grey arab terjemahan">{!!$item['tr']!!},</p><br><br><br>
        <p class="h5 g-color-grey arab terjemahan">Arti : {{$item['id']}},</p></div>
          <hr><hr>
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
    <script src="/vendors/@popperjs/popper.min.js"></script>
    <script src="/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="/vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="/assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500&amp;display=swap" rel="stylesheet">
  </body>

</html>