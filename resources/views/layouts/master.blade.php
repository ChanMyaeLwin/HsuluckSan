<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>ဆုလာဘ်စံ - အွန်လိုင်းထီဆိုင်</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->  
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="{{ asset('pages/css/animate.css')}}" rel="stylesheet">
  <link href="{{ asset('plugins/fancybox/source/jquery.fancybox.css')}}" rel="stylesheet">
  <link href="{{ asset('plugins/owl.carousel/assets/owl.carousel.css')}}" rel="stylesheet">
  <!-- Page level plugin styles END -->
  <!-- SweetAlert2 -->
  @include('sweetalert::alert')
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- SweetAlert 2 END -->
  <!-- Theme styles START -->
  <link href="{{ asset('pages/css/components.css')}}" rel="stylesheet">
  <link href="{{ asset('pages/css/slider.css')}}" rel="stylesheet">
  <link href="{{ asset('pages/css/style-shop.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('corporate/css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('corporate/css/style-responsive.css')}}" rel="stylesheet">
  <link href="{{ asset('corporate/css/themes/red.css')}}" rel="stylesheet" id="style-color">
  <link href="{{ asset('corporate/css/custom.css')}}" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="{{ route('welcome') }}"><img src="{{ asset('corporate/img/logos/logo-shop-red.png')}}" alt="Metronic Shop UI"></a>
        <a href="" class="mobi-toggler"><i class="fa fa-bars"></i></a>
        <!-- BEGIN CART -->
        <div class="top-cart-block">
          <div class="top-cart-info">
          <a href="" class="top-cart-info-count">Language</a>
          @role('Admin')
          <a href="{{route('dashboard')}}" class="top-cart-info-value">Admin Panel</a>
          @endrole

          @role('User')
            <a href="{{route('users.account')}}" class="top-cart-info-value">My Account</a>
            <a href="{{route('users.balance')}}" class="top-cart-info-value">My Balance</a>
            <a href="{{route('users.usertickets')}}" class="top-cart-info-value">My Tickets</a>
          @endrole
          @guest
            <a href="{{ route('login') }}" class="top-cart-info-value">{{ __('Login') }}</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="top-cart-info-value">{{ __('Register') }}</a>
            @endif
          @else
            <a class="top-cart-info-value" href="{{ route('logout') }}" onclick="event.preventDefault(); 
              document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
              </form>
          @endguest
          </div>
        </div>
        <!--END CART -->
        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
          <ul>
            <li><a href="{{route('tickets.checkView')}}">Check Lottery</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Shop 
              </a>
              <ul class="dropdown-menu">
                <li><a href="{{route('tickets.searchView')}}">Search</a></li>
                <li><a href="{{route('tickets.advancedSearchView')}}">Advanced Search</a></li>
              </ul>
            </li>
            <li><a href="#" target="_blank">Astrology</a></li>
            <li><a href="#" target="_blank">NEWS</a></li>
            <!-- BEGIN TOP SEARCH -->
            <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">
                <form action="#">
                  <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                  </div>
                </form>
              </div> 
            </li>
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->
    @yield('content')
    
    <!-- BEGIN BRANDS -->
    <div class="brands">
      <div class="container">
            <div class="owl-carousel owl-carousel6-brands">
              <a href="shop-product-list.html"><img src="{{ asset('pages/img/logo.png')}}" alt="p-logo" title="p-logo"></a>
              <a href="shop-product-list.html"><img src="{{ asset('pages/img/logo.png')}}" alt="p-logo" title="p-logo"></a>
              <a href="shop-product-list.html"><img src="{{ asset('pages/img/logo.png')}}" alt="p-logo" title="p-logo"></a>
              <a href="shop-product-list.html"><img src="{{ asset('pages/img/logo.png')}}" alt="p-logo" title="p-logo"></a>
              <a href="shop-product-list.html"><img src="{{ asset('pages/img/logo.png')}}" alt="p-logo" title="p-logo"></a>
              <a href="shop-product-list.html"><img src="{{ asset('pages/img/logo.png')}}" alt="p-logo" title="p-logo"></a>
              
            </div>
        </div>
    </div>
    <!-- END BRANDS -->

    

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit lobortis nisl aliquip  commodo consequat. </p>
            <p>Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore.</p>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->
          <!-- BEGIN BOTTOM INFO BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Information</h2>
            <ul class="list-unstyled">
              <li><i class="fa fa-angle-right"></i> <a href="{{route('tickets.searchView')}}">Shop</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="">Terms & Conditions</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="">FAQ</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Astrology</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">News</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Apply Partnership</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="contacts.html">Contact Us</a></li>
            </ul>
          </div>
          <!-- END INFO BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Our Contacts</h2>
            <address class="margin-bottom-40">
              35, Lorem Lis Street, Park Ave<br>
              Shwe Pyi Thar, Yangon<br>
              Phone: 300 323 3456<br>
              Fax: 300 323 1456<br>
              Email: <a href="mailto:suluckthar@6bictsolutions.com">Hsulucksan@6bictsolutions.com</a><br>
            </address>
          </div>
          <!-- END BOTTOM CONTACTS -->
        </div>
        <hr>
        <div class="row">
          <!-- BEGIN SOCIAL ICONS -->
          <div class="col-md-6 col-sm-6">
            <ul class="social-icons">
              <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
              <li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
              <li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
            </ul>
          </div>
          <!-- END SOCIAL ICONS -->
          <!-- BEGIN NEWLETTER -->
          <div class="col-md-6 col-sm-6">
            <div class="pre-footer-subscribe-box pull-right">
              <h2>Newsletter</h2>
              <form action="#">
                <div class="input-group">
                  <input type="text" placeholder="youremail@mail.com" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                  </span>
                </div>
              </form>
            </div> 
          </div>
          <!-- END NEWLETTER -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-4 col-sm-4 padding-top-10">
            2020 © 6b ICT Solutions. ALL Rights Reserved. 
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-4 col-sm-4">
            <ul class="list-unstyled list-inline pull-right">
              <li><img src="{{ asset('corporate/img/payments/western-union.jpg')}}" alt="We accept Western Union" title="We accept Western Union"></li>
              <li><img src="{{ asset('corporate/img/payments/american-express.jpg')}}" alt="We accept American Express" title="We accept American Express"></li>
              <li><img src="{{ asset('corporate/img/payments/MasterCard.jpg')}}" alt="We accept MasterCard" title="We accept MasterCard"></li>
              <li><img src="{{ asset('corporate/img/payments/PayPal.jpg')}}" alt="We accept PayPal" title="We accept PayPal"></li>
              <li><img src="{{ asset('corporate/img/payments/visa.jpg')}}" alt="We accept Visa" title="We accept Visa"></li>
            </ul>
          </div>
          <!-- END PAYMENTS -->
          <!-- BEGIN POWERED -->
          <div class="col-md-4 col-sm-4 text-right">
            <p class="powered">Powered by: <a href="http://www.6bictsolutions.com/">6b ICT Solutions</a></p>
          </div>
          <!-- END POWERED -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="{{ asset('plugins/respond.min.js')}}"></script>  
    <![endif]-->
    <script src="{{ asset('plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>      
    <script src="{{ asset('corporate/scripts/back-to-top.js')}}" type="text/javascript"></script>
    <script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{ asset('plugins/fancybox/source/jquery.fancybox.pack.js')}}" type="text/javascript"></script><!-- pop up -->
    <script src="{{ asset('plugins/owl.carousel/owl.carousel.min.js')}}" type="text/javascript"></script><!-- slider for products -->
    <script src="{{ asset('plugins/zoom/jquery.zoom.min.js')}}" type="text/javascript"></script><!-- product zoom -->
    <script src="{{ asset('plugins/bootstrap-touchspin/bootstrap.touchspin.js')}}" type="text/javascript"></script><!-- Quantity -->

    <script src="{{ asset('corporate/scripts/layout.js')}}" type="text/javascript"></script>
    <script src="{{ asset('pages/scripts/bs-carousel.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
        });
    </script>
    
     <script type="text/javascript" language="javascript" class="init">
      function buyticket(value) {
        const id = value;
        swal({
            title: "Confirmation!",
            text: "Are you sure to buy",
            textColor: "red",
            buttons: [true, "Buy!"],
            icon: "warning",
        }).then((value) => {
            if (value) {
                $.ajax({
                    method: "get",
                    url: `/buyticket/${id}`
                }).done(function (response) {
                    if (response['response_code'] == "200") {
                      const ticket_name = response['ticket_name'];
                      swal({
                        title: "Congres!",
                        text:  `You Buyed ${ticket_name}`,
                        textColor: "orange",
                        buttons: [true, "OK"],
                        icon: "info",
                      }).then(function(){
                        window.location.reload(true);
                      })  
                      
                    }else if (response['response_code'] == "300")  {
                      swal({
                        title: "Your balance is not enoutht, Top up again",
                      });
                    }else if (response['response_code'] == "400")  {
                      swal({
                        title: "This Ticket is owned by other right now",
                      });
                    } else {
                      swal({
                        title: "Something Error",
                      });
                    };
                })
                .fail(function( jqXHR, status, authorize) {
                  if (authorize == "Unauthorized") {
                    swal({
                        title: "Unauthorized!",
                        text: "You need to login to process",
                        textColor: "red",
                        buttons: [true, "Login"],
                        icon: "warning",
                    }).then((value) => {
                      if (value) {
                        window.location.href = '/login';
                      }
                    })
                  }
                });
              }
            })
      }
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>