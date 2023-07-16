<!DOCTYPE html>
<html lang="zxx">  
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Pearlbrill</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/updated/logo.png">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="assets/fonts/linea-fonts.css">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="assets/css/rsmenu-main.css">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="defult-home">
        
        <!--Preloader area start here-->
        <div id="loader" class="loader orange-color">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="assets/images/updated/logo.png" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here--> 

		<!-- Main content Start -->
        <div class="main-content">
            <!--Full width header Start-->
            <div class="full-width-header home8-style4 main-home">
                <!--Header Start-->
                <header id="rs-header" class="rs-header">  <!-- Topbar Area Start -->
                    <div class="topbar-area home8-topbar">
                        <div class="container">
                             @include('inc.topbar')
                        </div>
                    </div>
                    <!-- Topbar Area End -->
                   
                    <div class="menu-area menu-sticky">
                        <div class="container">
                            <div class="row y-middle">
                                <div class="col-lg-2">
                                    <div class="logo-cat-wrap">
                                        <div class="logo-part">
                                            <a href="/" style="display: flex; flex-direction: row; align-items: center;justify-content: center; gap: 1rem;">
                                                <img style="min-height: 70px;"  src="assets/images/updated/logo.png" alt="">
                                                 <span style="color:white; font-size:1.5rem;">Pearlbrill</span>
                                            </a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 text-right">
                                  <div class="rs-menu-area">
                                      <div class="main-menu">
                                          <div class="mobile-menu">
                                              <a class="rs-menu-toggle">
                                                  <i class="fa fa-bars"></i>
                                              </a>
                                          </div>
                                        @include('inc.header-component')                                     
                                      </div> <!-- //.main-menu -->
                                    
                                  </div>
                                </div>
                                <div class="col-lg-2 text-right">
                                    <div class="expand-btn-inner">
                                        <ul>
                                          
                                            <li>
                                                <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                                    <i class="flaticon-search"></i>
                                                </a>
                                            </li>
                                            <li class="user-icon cart-inner no-border mini-cart-active">
                                                <div class="woocommerce-mini-cart text-left">
                                                    <div class="cart-bottom-part">
                                                        <ul class="cart-icon-product-list">
                                                            <li class="display-flex">                                                              
                                                                <div class="product-info">
                                                                    <a href="cart.html">Law Book</a><br>
                                                                    <span class="quantity">1 × $30.00</span>
                                                                </div>
                                                                <div class="product-image">
                                                                    <a href="cart.html"><img src="assets/images/shop/1.jpg" alt="Product Image"></a>
                                                                </div>
                                                            </li>
                                                            <li class="display-flex">
                                                                <div class="icon-cart">
                                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                                </div>
                                                                <div class="product-info">
                                                                    <a href="cart.html">Spirit Level</a><br>
                                                                    <span class="quantity">1 × $30.00</span>
                                                                </div>
                                                                <div class="product-image">
                                                                    <a href="cart.html"><img src="assets/images/shop/2.jpg" alt="Product Image"></a>
                                                                </div>
                                                            </li>
                                                        </ul>

                                                        <div class="total-price text-center">
                                                            <span class="subtotal">Subtotal:</span>
                                                            <span class="current-price">$85.00</span>
                                                        </div>

                                                        <div class="cart-btn text-center">
                                                            <a class="crt-btn btn1" href="cart.html">View Cart</a>
                                                            <a class="crt-btn btn2" href="checkout.html">Check Out</a>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </li>
                                            
                                        </ul>
                                        <span>
                                            <a id="nav-expander" class="nav-expander">
                                                <span class="dot1"></span>
                                                <span class="dot2"></span>
                                                <span class="dot3"></span>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End --> 

                    <!-- Canvas Menu start -->
                    <nav class="right_menu_togle hidden-md">
                        <div class="close-btn">
                            <div id="nav-close">
                                <div class="line">
                                    <span class="line1"></span><span class="line2"></span>
                                </div>
                            </div>
                        </div>
                        <div class="canvas-logo">
                            <a href="index.html"><img src="assets/images/updated/logo.png" alt="logo"></a>
                        </div>
                        <div class="offcanvas-text">
                            <p>About description...indige nationality and dislike men who are so beguiled and demo  by the charms of pleasure of the moment data com so blinded by desire.</p>
                        </div>
                        <div class="offcanvas-gallery">
                            <div class="gallery-img">
                                <a class="image-popup" href="assets/images/gallery/1.jpg"><img src="assets/images/gallery/1.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a class="image-popup" href="assets/images/gallery/2.jpg"><img src="assets/images/gallery/2.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a class="image-popup" href="assets/images/gallery/3.jpg"><img src="assets/images/gallery/3.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a class="image-popup" href="assets/images/gallery/4.jpg"><img src="assets/images/gallery/4.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a class="image-popup" href="assets/images/gallery/5.jpg"><img src="assets/images/gallery/5.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a class="image-popup" href="assets/images/gallery/6.jpg"><img src="assets/images/gallery/6.jpg" alt=""></a>
                            </div>
                        </div>
                      
                    </nav>
                    <!-- Canvas Menu end -->
                </header>
                <!--Header End-->
            </div>
            <!--Full width header End-->

            <!-- Slider Section Start -->
            <div class="rs-slider main-home">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
                    <div class="slider-content slide1">
                        <div class="container">
                            <div class="content-part">
                                <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Start to learning today</div>
                                <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Online Courses From Leading Experts</h1>
                                <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                    <a class="readon orange-btn main-home" href="#">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-content slide2">
                        <div class="container">
                            <div class="content-part">
                                <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Start to learning today</div>
                                <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Explore Interests and Career With Courses</h1>
                                <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                    <a class="readon orange-btn main-home" href="#">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features Section start -->
                <div id="rs-features" class="rs-features main-home">
                    <div class="container">
                       <div class="row">
                            <div class="col-lg-4 col-md-12 md-mb-30">
                                <div class="features-wrap">
                                    <div class="icon-part">
                                       <img src="assets/images/features/icon/3.png" alt="">
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">
                                            <span class="watermark">30+ blogs & samples</span>
                                        </h4>
                                        <p class="dese">
                                           Enjoy a variety of fresh topics
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-12 md-mb-30">
                                <div class="features-wrap">
                                    <div class="icon-part">
                                       <img src="assets/images/features/icon/2.png" alt="">
                                    </div>
                                    <div class="content-part">
                                      <h4 class="title">
                                          <span class="watermark">Expert instruction</span>
                                      </h4>
                                        <p class="dese">
                                            Find the right instructor
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-12">
                                <div class="features-wrap">
                                    <div class="icon-part">
                                       <img src="assets/images/features/icon/1.png" alt="">
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">
                                            <span class="watermark">Lifetime access</span>
                                        </h4>
                                        <p class="dese">
                                           Learn on your schedule
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Features Section End -->
            </div>
            <!-- Slider Section End -->  

            <div class="m-4">
                @include('inc.messages')
            </div>
            <!-- Categories Section Start -->
            <div id="rs-categories" class="rs-categories main-home pt-90 pb-10 md-pt-60 md-pb-10">
                <div class="container">
                    <div class="sec-title3 text-center mb-45">
                        <div class="sub-title"> Top Categories</div>
                        <h2 class="title black-color">All Categories</h2>
                    </div>
                    <div class="row mb-35">
                        @foreach ($categories as $item)
                            <div class="col-lg-4 col-md-6 mb-30">
                                <div class="categories-items">
                                    <div class="cate-images">
                                        <a href="#"><img src="uploads/our_categories/{{$item->img_url}}" alt=""></a>
                                    </div>
                                    <div class="contents">
                                        <div class="content-wrap">
                                            <h2 class="title"><a href="#">{{$item->title}}</a></h2>
                                            <span class="course-qnty">
                                                {{$item->text}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        @endforeach                   
                    
                    </div>
                </div>
            </div>
            <!-- Categories Section End -->
            
              <!-- Samples Section Start -->
              <div id="rs-blog" class="rs-blog main-home pb-10 pt-100 md-pt-10 md-pb-10">
                <div class="container">  
                      <div class="sec-title3 text-center mb-50">
                        <div class="sub-title"> Our Samples</div>
                        <h2 class="title"> View Our Latest Samples</h2>
                      </div> 
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="blog-item">
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>December 15, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Education is The Process of Facilitating Learning</a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling...</div>
                                <div class="btn-btm">
                                    <div class="float-right">
                                        <a href="#">Read More  <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>October 15, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">High school program starting soon 2021 </a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                    <div class="cat-list">
                                        <ul class="post-categories">
                                            <li><a href="#">College</a></li>
                                        </ul>
                                    </div>
                                    <div class="float-right">
                                        <a href="#">Read More  <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>April 25, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Shutdown of schools extended to Aug 31 </a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                    <div class="cat-list">
                                        <ul class="post-categories">
                                            <li><a href="#">College</a></li>
                                        </ul>
                                    </div>
                                    <div class="float-right">
                                        <a href="#">Read More  <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>June 20, 2010</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">This is a great source of content for anyone… </a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                    <div class="cat-list">
                                        <ul class="post-categories">
                                            <li><a href="#">College</a></li>
                                        </ul>
                                    </div>
                                    <div class="float-right">
                                        <a href="#">Read More  <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>August 30, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Pandemic drives millions from Latin America’s</a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                    <div class="cat-list">
                                        <ul class="post-categories">
                                            <li><a href="#">College</a></li>
                                        </ul>
                                    </div>
                                    <div class="float-right">
                                        <a href="#">Read More  <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>May 10, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Modern School the lovely valley team work</a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                    <div class="cat-list">
                                        <ul class="post-categories">
                                            <li><a href="#">College</a></li>
                                        </ul>
                                    </div>
                                    <div class="float-right">
                                        <a href="#">Read More  <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
            <!-- Samples Section End -->

            
            <!-- Blog Section Start -->
            <div id="rs-blog" class="rs-blog main-home pb-100 pt-100 md-pt-70 md-pb-70">
                <div class="container">  
                      <div class="sec-title3 text-center mb-50">
                        <div class="sub-title"> Blogs</div>
                        <h2 class="title"> Latest Blogs & events</h2>
                      </div> 
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/1.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>December 15, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Education is The Process of Facilitating Learning</a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                
                                    <div >
                                        <a href="#">Read More<i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/2.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>October 15, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">High school program starting soon 2021 </a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                
                                    <div >
                                        <a href="#">Read More<i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/3.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>April 25, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Shutdown of schools extended to Aug 31 </a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                
                                    <div >
                                        <a href="#">Read More<i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/4.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>June 20, 2010</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">This is a great source of content for anyone… </a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                
                                    <div >
                                        <a href="#">Read More<i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/5.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>August 30, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Pandemic drives millions from Latin America’s</a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                
                                    <div >
                                        <a href="#">Read More<i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/6.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>May 10, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Modern School the lovely valley team work</a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                
                                    <div >
                                        <a href="#">Read More<i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
            <!-- Blog Section End -->

           

            <!-- CTA Section Start -->
            <div class="rs-cta main-home">
                <div class="partition-bg-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="offset-lg-6"></div>
                            <div class="col-lg-6 pl-70 md-pl-15">
                                <div class="sec-title3 mb-40">
                                    <h2 class="title white-color mb-16">
                                        {{$performance_indicator->title}} 
                                       
                                    </h2>
                                    <div class="desc white-color pr-100 md-pr-0">
                                        {{$performance_indicator->text}}
                                        @role('admin')
                                        <a href="{{ route('dashboard_home.edit', $performance_indicator->id) }}" class="btn btn-primary">Edit</a>
                                         
                                        @endrole
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CTA Section End --> 
       

            <!-- Testimonial Section Start -->
            <div class="rs-testimonial main-home pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title3 mb-50 md-mb-30 text-center">
                        <div class="sub-title primary">Testimonial</div>
                        <h2 class="title white-color">What Others Are Saying</h2>
                    </div>
                    <div class="rs-carousel owl-carousel" 
                        data-loop="true" 
                        data-items="2" 
                        data-margin="30" 
                        data-autoplay="true" 
                        data-hoverpause="true" 
                        data-autoplay-timeout="5000" 
                        data-smart-speed="800" 
                        data-dots="true" 
                        data-nav="false" 
                        data-nav-speed="false" 

                        data-md-device="2" 
                        data-md-device-nav="false" 
                        data-md-device-dots="true" 
                        data-center-mode="false"

                        data-ipad-device2="1" 
                        data-ipad-device-nav2="false" 
                        data-ipad-device-dots2="true"

                        data-ipad-device="2" 
                        data-ipad-device-nav="false" 
                        data-ipad-device-dots="true" 

                        data-mobile-device="1" 
                        data-mobile-device-nav="false" 
                        data-mobile-device-dots="false">
                        @foreach ($testmonials as $item)
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt="">
                                {{$item->text}}
                                </div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/style5/2.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">{{$item->author_name}}</a>
                                <span class="designation">{{$item->author_occupation}}</span>
                            </div>
                        </div>   
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Blog Section Start -->
            <div id="rs-blog" class="rs-blog main-home pb-100 pt-100 md-pt-70 md-pb-70">
                <div class="container">  
                      <div class="sec-title3 text-center mb-50">
                        <div class="sub-title"> News Update</div>
                        <h2 class="title"> Latest News & events</h2>
                      </div> 
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/1.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>December 15, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Education is The Process of Facilitating Learning</a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                
                                    <div >
                                        <a href="#">Read More<i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/2.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>October 15, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">High school program starting soon 2021 </a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                
                                    <div >
                                        <a href="#">Read More<i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/3.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>April 25, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Shutdown of schools extended to Aug 31 </a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                
                                    <div >
                                        <a href="#">Read More<i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/4.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>June 20, 2010</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">This is a great source of content for anyone… </a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                
                                    <div >
                                        <a href="#">Read More<i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/5.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>August 30, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Pandemic drives millions from Latin America’s</a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                
                                    <div >
                                        <a href="#">Read More<i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="assets/images/blog/style2/6.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>May 10, 2020</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">Modern School the lovely valley team work</a></h3>
                                <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                <div class="btn-btm">
                                
                                    <div >
                                        <a href="#">Read More<i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
            <!-- Blog Section End -->

            <!-- Newsletter section start -->
            @include('inc.newsletter')
            <!-- Newsletter section end -->
     
        </div> 
        <!-- Main content End -->
     
        <!-- Footer Start -->
         @extends('inc.footer')
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        <!-- modernizr js -->
        <script src="assets/js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Menu js -->
        <script src="assets/js/rsmenu-main.js"></script> 
        <!-- op nav js -->
        <script src="assets/js/jquery.nav.js"></script>
        <!-- owl.carousel js -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Slick js -->
        <script src="assets/js/slick.min.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- wow js -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Skill bar js -->
        <script src="assets/js/skill.bars.jquery.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>        
         <!-- counter top js -->
        <script src="assets/js/waypoints.min.js"></script>
        <!-- video js -->
        <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
        <!-- magnific popup js -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>      
        <!-- plugins js -->
        <script src="assets/js/plugins.js"></script>
        <!-- contact form js -->
        <script src="assets/js/contact.form.js"></script>
        <!-- main js -->
        <script src="assets/js/main.js"></script>
    </body>
</html>