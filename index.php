<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Heavy Vehicle Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-2 bg-white" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php" class="text-black h1 mb-0">@Finds_Heavy_Vehicles </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php"><span>Home</span></a></li>
                <li><a href="about.php"><span>About</span></a></li>
                <li class="has-children">
                  <a href="homepage.php"><span>Agency LogIn</span></a>
                  <ul class="dropdown">
                    <li><a href="registration.php">Agency Registration</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

  

    <div class="site-blocks-cover overlay" style="background-image: url(https://images.alphacoders.com/546/thumb-1920-546091.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1 data-aos="fade-up">Find Your <span class="typed-words"></span></h1>
                <p data-aos="fade-up" data-aos-delay="100">Explore top-rated attractions, activities and more!</p>
              </div>
            </div>

            <div class="form-search-wrap p-2" data-aos="fade-up" data-aos-delay="100" style="width:900px;">
              <form method="post" action="fetchsearch.php">
                <div class="row align-items-center">
                  
                  <div class="col-lg-6 col-xl-3 no-sm-border border-right">
                    <div class="wrap-icon">
                      <span class="icon icon-room"></span>
                      <select class="app-select form-control" name="keyword" id="keyword" required>
                        <option>Location.</option>
                        <option value="asansol">Asansol</option>
                        <option value="durgapur">Durgapur</option>
                        <option value="hoogly">Hoogly</option>
                        <option value="kolkata">Kolkata</option>
                        <option value="raghunathpur">Raghunathpur</option>
                      </select>
                    </div>
                    
                  </div>
                  <div class="col-lg-8 col-xl-6 no-sm-border border-right">
                    <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="app-select form-control" name="keyword1" id="keyword1" required>
                        <option>Find Your Vehicle Type You Want.</option>
                        <option value="truck">Truck</option>
                        <option value="tank">Tank</option>
                        <option value="crane">Crane</option>
                        <option value="tractor">Tractor</option>
                        <option value="jcb">JCB</option>
                        <option value="bike">Bike</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-2 ml-auto text-right">
                    <input class="btn btn-primary" type="submit" value="filter" name="search" >
                  </div>
                  
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>  


           </div>
        </div>
      </div>
    </div>

    

    
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Popular Categories</h2>
            <p class="color-black-opacity-5">Whenever You Go,Go With Your Heart</p>
          </div>
        </div>

        <div class="row align-items-stretch">
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span><img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS59qh-MggsChAx3jwULxFHKRRp62bIQpTvW-b0cUnH-y5qTKIJ height=50 width=50></img></span>
              <span class="caption mb-2 d-block">Truck</span>
              <span class="number">3,921</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span> <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZaoSowxQKqIgtg_JN3U4pnTBTyDAvMGp5m45wH7GhYbc4pJLH height=50 width=50></img></span>
              <span class="caption mb-2 d-block">Tractor</span>
              <span class="number">398</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span><img src=https://mobile-cdn.123rf.com/300wm/kostymo/kostymo1707/kostymo170700009/82181889-retroexcavadora-amarilla-sobre-un-fondo-blanco-maquinaria-de-construcci%C3%B3n-equipamiento-especial-ejemplo.jpg?ver=6 height=50 width=50></img></span>
              <span class="caption mb-2 d-block">JCB</span>
              <span class="number">1,229</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span><img src=data:image/jpeg;base64,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 height=50 width=50></img></span>
              <span class="caption mb-2 d-block">Tank</span>
              <span class="number">32,891</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span><img src=https://previews.123rf.com/images/dvolkovkir1980/dvolkovkir19801705/dvolkovkir1980170500089/79272478-dumper-m%C3%A1quina-de-construcci%C3%B3n-cami%C3%B3n-dise%C3%B1o-plano-ilustraci%C3%B3n-vectorial-vector-.jpg height=50 width=50></img></span>
              <span class="caption mb-2 d-block">Lorry</span>
              <span class="number">29,221</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span><img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMQ1Qzc_tqS4CdLK0V130z1pE34PURfYSfRJEtTlYNuSLUvTxs height=50 width=50></img></span>
              <span class="caption mb-2 d-block">Others</span>
              <span class="number">219</span>
            </a>
          </div>
        </div>
      </div>
    </div>
      
    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <img src="https://images.pexels.com/photos/2254093/pexels-photo-2254093.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="text-primary mb-3">Why Us</h2>
            <p>This system “Vehicle services” allows providing vehicle for service. If customer gets any requirements for the heavy duty vehicles which is often required now a days then this system is highly convenient for them.</p>
            <p class="mb-4">This system is designed to make the vehicles available to the customers or any organizations as per their requirements. The heavy duty vehicles generally includes JCB, Lorry, Trucks etc.</p>

            <ul class="ul-check list-unstyled success">
              <li>Applicable For All Users</li>
              <li>Easy To Use</li>
              <li>Will Save A Lot Times Of Users</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section bg-light">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Testimonials</h2>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-3">
                <p>Saikat Mudi</p>
              </figure>
              <blockquote>
                <p>Don't Fret,Just Keep On Truckin.</p>
              </blockquote>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-3">
                <p>Sudeshna Gupta</p>
              </figure>
              <blockquote>
                <p>Expand the Business With Commercial Vehicle,If Some One Love Times,Don't Care about Money.</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_4.jpg" alt="Image" class="img-fluid mb-3">
                <p>Somnath Pal</p>
              </figure>
              <blockquote>
                <p>Keep Calm And Keep On Truckin.</p>
              </blockquote>
            </div>
          </div>

         

        </div>
      </div>
    </div>



    
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
 
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>
  

  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Vehicles"," Carrier"," Transporter"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>
    
  </body>
</html>