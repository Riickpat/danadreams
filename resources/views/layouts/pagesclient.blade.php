  <!DOCTYPE html>
  <html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta content="" name="keywords">

    <title>DANA DREAMS - accueil</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="client/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="client/assets/css/font-awesome.css">
    <link rel="stylesheet" href="client/assets/css/templatemo-hexashop.css">
    <link rel="stylesheet" href="client/assets/css/owl-carousel.css">
    <link rel="stylesheet" href="client/assets/css/lightbox.css">
    <link rel="icon" type="image/png" href="client/assets/images/Logo-DDREAMS-removebg-preview.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!--==========================
                Header
     ============================-->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <div class="logo">
                            <a href="{{route('accueil')}}"><img src="client/assets/images/Logo-DDREAMS-removebg-preview.png" alt="" class="img-fluid" style="height: px;width:70px;"></a>
                          </div>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{route('accueil')}}">Accueil</a></li>
                            <li class="scroll-to-section"><a href="{{route('apropos')}}">DanaDreams</a></li>
                            <li class="scroll-to-section"><a href="{{route('boutique')}}">Boutique</a></li>
                            <li class="scroll-to-section"><a href="{{route('blog')}}">Blog</a></li>
                            <li><a href="{{route('page-login')}}" style="color: red">Connexion</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- #header -->




  @yield('content')




  <!--==========================
    Footer
  ============================-->
  <!-- ***** Footer Start ***** -->
  <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="client/assets/images/Logo-DDREAMS-removebg-preview.png" alt="" class="img-fluid" style="height: 70px;width:70px;">
                        </div>
                        <ul>
                            <li><a href="#">Vêtements et accessoires en mode.
                                Disponible à Lomé, livraison à domicile</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Nos pages</h4>
                    <ul>
                        <li><a href="#">Femmes</a></li>
                        <li><a href="#">Hommes</a></li>
                        <li><a href="#">Accessoires</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="#">(+228) 92146589</a></li>
                        <li><a href="#">contact@gmail.com</a></li>
                        <li><a href="#">Lomé (Togo)</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Nos services</h4>
                    <ul>
                        <li><a href="#">Boutique</a></li>
                        <li><a href="#">Décoration</a></li>
                        <li><a href="#">Accessoires</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2024 Dana dreams Co., Ltd. All Rights Reserved. 
                        
                        <br>Design: <a href="#" target="_parent">Dana dreams</a>
                        <ul>
                            <li><a href="https://www.facebook.com/danadreamstg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/danadreamstg"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://wa.me/92146589"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="client/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="client/assets/js/popper.js"></script>
    <script src="client/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="client/assets/js/owl-carousel.js"></script>
    <script src="client/assets/js/accordions.js"></script>
    <script src="client/assets/js/datepicker.js"></script>
    <script src="client/assets/js/scrollreveal.min.js"></script>
    <script src="client/assets/js/waypoints.min.js"></script>
    <script src="client/assets/js/jquery.counterup.min.js"></script>
    <script src="client/assets/js/imgfix.min.js"></script> 
    <script src="client/assets/js/slick.js"></script> 
    <script src="client/assets/js/lightbox.js"></script> 
    <script src="client/assets/js/isotope.js"></script>
    <script src="client/assets/js/quantity.js"></script>  
    <!-- Global Init -->
    <script src="client/assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>