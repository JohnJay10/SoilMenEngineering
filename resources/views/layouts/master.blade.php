<!DOCTYPE html>
<html>
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- reponsive meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soilmen Engineering Services (Nig.)</title>
    <!-- Bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- animate css-->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- owl-carousel-->
    <link rel="stylesheet" href="vendors/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="vendors/revolution/css/settings.css">
    <link rel="stylesheet" href="vendors/revolution/css/layers.css">
    <link rel="stylesheet" href="vendors/revolution/css/navigation.css">
    <link rel="stylesheet" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">
    <!-- Main Css-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" type="image/png" sizes="16x16" href="images/home_page_variation5/lg1.png">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')
    script(src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js')
    -->
  </head>
  <body>
    <header id="header" class="header-5">

    <section class="wel-t-band">
        <div class="container">
          <div class="row wel-band-bg">
            <div class="col-md-6 pull-left col col-sm-12">
              <p>Welcome to SoilMen Engineering Services (NIG) Limited <span>since 2006</span></p>
            </div>
            <div class="col-md-6 pull-right text-right col-sm-12">
              <!-- <p>Global Certificate: <span>ISO 9001:2016</span></p> -->
            </div>
          </div>
        </div>
      </section>
      <!-- Logo Section-->
      <div class="container">
        <div class="row pad-logo logo-wrapper">
           <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12 t-logo"><a href="{{ route('index') }}"><img src="images/home_page_variation5/lg1.png" alt="logo" class="img-responsive"></a></div> 
          <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12 text-right">
            <div class="top-two-right">
              <div class="req-button text-right"><a href="{{ route('quote') }}" class="submit">requet a quote</a></div>
              <div class="top-panel">
                <div class="touch_top touch_top_pad">
                  <ul class="nav">
                    <li class="item item-phone">
                      <div class="media">
                        <div class="blue-color media-left"><a href="#"><i class="icon icon-Phone2"></i></a></div>
                        <div class="media-body">
                          <p>+234 80 607 174 90 <br><br>+234 70 103 497 64<br><span><a href="">Soilmen13@gmail.com</a></span></p>
                        </div>
                      </div>
                    </li>
                    <li class="item item-ad">
                      <div class="media">
                        <div class="blue-color media-left"><a href="#"><i class="icon icon-Pointer"></i></a></div>
                        <div class="media-body">
                          <p>Plot 50 & 51 FCDA Owners ,<br><span> Occupier Kubwa Express</span><br><span> way Fct – Abuja.</span></p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main Navigation-->
      <div class="main_menu menu_fixed nav-home-three">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
              <div class="logo"><img src="images/logo-mobile.png" alt=""></div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="navi">
                <div class="nav-menu pull-left text-left">
                  <div class="nav-t-holder pull-left text-left">
                    <div class="nav-t-header">
                      <button><i class="fa fa-bars"></i></button>
                    </div>
                    <div class="nav-t-footer">
                      <ul class="nav">
                        <li class="has-t-submenu"><a href="{{ route('index') }}">HOME</a>
                          
                        </li>
                        <li class="has-t-submenu"><a href="{{ route('about-us') }}">ABOUT-US</a> 
                        </li>
                        
                        <li class="has-t-submenu"><a href="{{ route('services') }}">SERVICES</a>
                        </li>
                       
                        <li><a href="{{ route('contact-us') }}">CONTACT-US</a></li>
                      </ul>
                      <div class="mobile-link"><a href="request-qoute.html" class="submit">requet a quote</a>
                        <div class="widget-t widget-t-search">
                          <div class="widget-t-inner">
                            <form action="#" method="get" class="search-form">
                              <div class="input-group">
                                <input type="search" placeholder="Search" class="form-control"><span class="input-group-addon">
                                  <button type="submit"><i class="icon icon-Search"></i></button></span>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="nav-search pull-right text-right">
                  <div class="widget-t widget-t-search">
                    <div class="widget-t-inner">
                      <form action="#" method="get" class="search-form">
                        <div class="input-group">
                          <input type="search" placeholder="Search" class="form-control"><span class="input-group-addon">
                            <button type="submit"><i class="icon icon-Search"></i></button></span>
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
      <!-- Main Navigation-->
    </header>
    <!-- =========home banner start============-->
        @yield('content')
    <footer class="sec-padding footer-bg footer-bg3">
      <div class="container clearfix">
        <div class="row">
          <div class="widget about-us-widget col-md-3 col-sm-6"><a href="#"><img src="images/home_page_variation5/lg1.png" alt=""></a>
            <p>Soilmen Engineering Services (Nig.) Limited (SESNL) is an indigenous COREN certified geotechnical engineering firm established in 2002 and incorporated in 2006.</p><a href="{{ route('about-us') }}">Read More <i class="fa fa-angle-double-right"></i></a>
            <ul class="nav">
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
            </ul>
          </div>
          <div class="widget widget-links col-md-3 col-sm-6">
            <h4 class="widget_title">Our Solutions</h4>
            <div class="widget-contact-list row m0">
              <ul>
                <li><a href="meterial.html">- Standard Penetration</a></li>
                <li><a href="agricultural.html">- Laboratory Test Services</a></li>
                <li><a href="mechanical.html">- Structural Integrity Testing </a></li>
                <li><a href="chemical.html">- Calibration of Equipments</a></li>
                <li><a href="power.html">- Pavement Evaluation Test</a></li>
                
              </ul>
            </div>
          </div>
          <div class="widget widget-links col-md-3 col-sm-6">
            <h4 class="widget_title">Quick Links</h4>
            <div class="widget-contact-list row m0">
              <ul>
                <li><a href="{{ route('about-us') }}">- About Us</a></li>
                <li><a href="{{ route('services') }}">- Services</a></li>
                <li><a href="{{ route('contact-us') }}">- Contact Us</a></li>
                
              </ul>
            </div>
          </div>
          <div class="widget widget-contact col-md-3 col-sm-6">
            <h4 class="widget_title">Get in Touch</h4>
            <div class="widget-contact-list row m0">
              <ul>
                <li><i class="fa fa-map-marker"></i>
                  <div class="fleft location_address">Office Address: Plot 50 & 51 FCDA Owners Occupier, off Kubwa Express-way, Fct – Abuja.</div>
                </li>
                <li><i class="fa fa-phone"></i>
                  <div class="fleft contact_no"><a href="#">+234 80 607 174 90 | +234 70 103 497 64</a></div>
                </li>
                <li><i class="fa fa-envelope-o"></i>
                  <div class="fleft contact_mail"><a href="#">Soilmen13@gmail.com</a></div>
                </li>
                <li><i class="icon icon-Timer"></i>
                  <div class="fleft service_time">Mon - Sat : 9am to 6pm</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <section class="footer-t-bottom footer-bottom footer-bottom3">
      <div class="container clearfix">
        <div class="pull-left fo-txt">
          <p>Copyright © Industiral 2024.. All rights reserved.</p>
        </div>
       
      </div>
    </section>
    <script src="js/jquery-1.12.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Revolution Slider Tools-->
    <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Revolution Slider-->
    <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <!-- owl carousel-->
    <script src="vendors/owlcarousel/owl.carousel.min.js"></script>
    <script src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTI1BZJKFCeJ8g9O01CMZ4QvVCfdPYkrE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
  </body>

</html>