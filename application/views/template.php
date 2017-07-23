<!DOCTYPE html>
<html>
<head>
    <title>Third Way Investment Partners - Lead the way</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?= base_url()?>assets/images/favicon.png">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
    
    <!-- Reset CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/common.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/normalize.css">
    
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    
    <!--font awesome-->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/font-awesome.min.css">
    
    <!--animate css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/nice-select.css">
    
    <!-- slick-slider CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/slick.slider.css">
    
    <!-- menuZord CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/menuzord.css">
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/style.css">
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/responsive.css">
    
</head>
<body>
    <!-- Start Main Menu -->
    <nav id="top-nav" class="oneNav transition navbar custom-navbar navbar-fixed-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 large-device">
            <!-- NAVBAR HEADER -->
            <div class="navbar-header menu transition">
              <!-- lOGO TEXT HERE -->
              <a href="index.html" class="navbar-brand logo logo-landing"><img src="<?= base_url()?>assets/images/thirdway-footer-logo.svg" /></a>
              <a href="index.html" class="navbar-brand logo logo-fixed"><img src="<?= base_url()?>assets/images/thirdway-logo.svg" /></a>
            </div>
          </div>
          <div class="col-lg-8">
            <div id="menuzord" class="menuzord pull-right">
              <div class="small-device navbar-header menu transition" id="menu">
                <!-- lOGO TEXT HERE -->
                <a href="index.html" class="navbar-brand logo"><img src="<?= base_url()?>assets/images/thirdway-footer-logo.svg" /></a>
              </div>
              <?php 
              if($this->session->userdata('logged_in')):
               ?>
                <ul class="menuzord-menu">
                <li><a href="<?=base_url()?>">Home</a></li>
                <li><a href="<?=base_url()?>index.php/user/account">Account</a></li>
                <li><a href="<?=base_url()?>index.php/user/logout">Logout</a></li>
              </ul>
              <?php
              else: 
                ?>
                 <ul class="menuzord-menu">
                <li><a href="<?=base_url()?>">Home</a></li>
                <li><a href="<?=base_url()?>index.php/user/login">Login</a></li>
                <li><a href="<?=base_url()?>index.php/user/registration">Register</a></li>
              
              </ul>
              <?php
              endif;

              ?>
           
            </div>
          </div>
          <!--/col-md-8-->
        </div>
        <!--/row-->
      </div>
    </nav>
    <!-- End Main Menu -->
    <section class="home-slider">
      <div class="Modern-Slider">
      <!-- Item-3 -->
        <div class="item">
          <div class="slider-overlay"></div>
          <div class="img-fill">
            <img src="<?= base_url()?>assets/images/banner-the-match.jpg" alt="slide-item-3">
            <div class="info">
              <div class="slider-overlay"></div>
              <div>
                <div class="slider-tbl">
                  <div class="slider-tbl-cell">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-6 text-left">
                          <h3>We help you to grow your business.</h3>
                          <h5>We are a creative team who help the clients to design their own business and projects.</h5>
                           <a href="<?= base_url()?>index.php/user/registration">Register</a>
                           <a href="<?= base_url()?>index.php/user/login">Login</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- // Item-3 -->
        <!-- Item-4 -->
        <div class="item">
          <div class="img-fill">
            <img src="<?= base_url()?>assets/images/banner-the-umbrella.jpg" alt="slide-item-4">
            <div class="info">
              <div class="slider-overlay"></div>
              <div>
                <div class="slider-tbl">
                  <div class="slider-tbl-cell">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-6 text-left">
                          <h3>We help you to grow your business.</h3>
                          <h5>We are a creative team who help the clients to design their own business and projects.</h5>
                          <a href="#">Get free consultation</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
        <!-- Item-1 -->
        <div class="item">
          <div class="img-fill">
            <img src="<?= base_url()?>assets/images/banner-the-box.jpg" alt="slide-item-1">
            <div class="info">
              <div class="slider-overlay"></div>
              <div>
                <div class="slider-tbl">
                  <div class="slider-tbl-cell">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-6 text-left">
                          <h3>We help you to grow your business.</h3>
                          <h5>We are a creative team who help the clients to design their own business and projects.</h5>
                          <a href="<?= base_url()?>index.php/user/registration">Register</a>
                           <a href="<?= base_url()?>index.php/user/login">Login</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- // Item-1 -->
        <!-- Item-2 -->
        <div class="item">
          <div class="slider-overlay"></div>
          <div class="img-fill">
            <img src="<?= base_url()?>assets/images/banner-the-light.jpg" alt="slide-item-2">
            <div class="info">
              <div class="slider-overlay"></div>
              <div>
                <div class="slider-tbl">
                  <div class="slider-tbl-cell">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-6 text-left">
                          <h3>We help you to grow your business.</h3>
                          <h5>We are a creative team who help the clients to design their own business and projects.</h5>
                          <a href="#">Get free consultation</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- // Item-2 -->
        
      </div>
    </section>
    
    <!--============================================
      ==Start service section==      
      ============================================-->
    <section class="service_section">
      <div class="container">
        <div class="row">
        
            <div class="col-lg-9 page-content">
            
            <h1>Third Way Investment Partners</h1>
            <?php $this->load->view($page); ?>
      
            </div>
            
            <div class="col-lg-3 sidebar">
                    
                <div class="single-blog-widget twitter-wrap">
                    <div class="sidebar-widget-title">
                        <h3><a href="https://twitter.com/thirdwayza" target="_blank">Latest @ThirdWayZA</a></h3>
                    </div>  
                    <a class="twitter-timeline" href="https://twitter.com/thirdwayza" data-chrome="noheader nofooter noborders transparent" data-tweet-limit="5">Tweets by ThirdWayZA</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <a href="https://twitter.com/thirdwayza" target="_blank" class="btn btn-default load-more-project-wrap margintop">Follow @ThirdWayZA</a>
                    
                </div>
                
              
                
            </div>
          
          </div>
        </div>
      </div>
    </section>

   
    <!-- start footer-widget -->
    <section class="footer-widget-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="single-widget">
              <img src="?= base_url()?>assets/images/thirdway-footer-logo.svg" class="logo" />
              <p>We provide expert financial advice to both individuals and businesses. With over 20 years of experience we’ll ensure that you’re always getting the best guidance from the top people in the entire industry.</p>
              <div class="social-link">
              	<a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
              	<a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
              	<a href="" title="Linked In"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="single-widget">
              <h4 class="widget-hedding font-weight-500">Useful Links</h4>
              <ul>
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Works</a></li>
                <li><a href="#">RH Bophelo</a></li>
                <li><a href="#">Agisa Energy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="single-widget">
              <h4 class="widget-hedding font-weight-500">Contact Us</h4>
              <p>3rd Floor, 18 Melrose Boulevard, Melrose Arch, Johannesburg</p>
              <p>+27 (0)10 007 2171</p>
              <p>invest@thirdway.co.za</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="single-widget">
              <h4 class="widget-hedding font-weight-500">Subscribe to Newsletter</h4>
             
              <div class="mail_subscription">
                <form action="#." >
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="First name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last name">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email address">
                  </div>
                  <a href="#." class="btn btn-default load-more-project-wrap">Submit</a>
                </form>
                <small><i class="fa fa-lock"></i> Your email address is 100% safe to us</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end footer-widget -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <p class="copyrighttxt">Copyright 2017 Third Way Investment Partners.</p>
          </div>
          <div class="col-lg-6">
            <div class="text-right">
            	Developed and managed by <a href="http://www.kaitomacreatives.co.za/" target="_blank">Kaitoma Creatives</a> in collaboration with <a href="http://www.bluevinegroup.co.za/" target="_blank">Bluevine</a>.
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- /footer -->
    
    <!-- Jquery latest version -->
    <script src="<?= base_url()?>assets/js/jquery-2.1.4.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
    
    <!--Modernizr JS -->
    <script type="text/javascript" src="<?= base_url()?>assets/js/modernizr.js"></script>
    
    <!-- TouchSwipe JS -->
    <script src="<?= base_url()?>assets/js/jquery.touchSwipe.js"></script>
    
    <!-- Nice Select JS  -->
    <script type="text/javascript" src="<?= base_url()?>assets/js/jquery.nice-select.min.js"></script>
    
    <!-- slick slider JS  -->
    <script type="text/javascript" src="<?= base_url()?>assets/js/slick.js"></script>
    
    <!-- menuzord JS  -->
    <script type="text/javascript" src="<?= base_url()?>assets/js/menuzord.js"></script>
    
    <!-- Main JS -->
    <script src="<?= base_url()?>assets/js/main.js"></script>
    
</body>
</html>