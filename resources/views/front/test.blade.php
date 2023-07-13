@extends('layouts.app')

@section('front-content')

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

            <!-- Categories Section Start -->
            <div id="rs-categories" class="rs-categories main-home pt-90 pb-10 md-pt-60 md-pb-10">
                <div class="container">
                    <div class="sec-title3 text-center mb-45">
                        <div class="sub-title"> Top Categories</div>
                        <h2 class="title black-color">All Categories</h2>
                    </div>
                    <div class="row mb-35">
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="categories-items">
                                <div class="cate-images">
                                    <a href="#"><img src="assets/images/categories/main-home/1.jpg" alt=""></a>
                                </div>
                                <div class="contents">
                                    {{-- <div class="img-part">
                                        <img src="assets/images/categories/main-home/icon/1.png" alt="">
                                    </div> --}}
                                    <div class="content-wrap">
                                        <h2 class="title"><a href="#">CIPD Course Levels</a></h2>
                                        <span class="course-qnty">Pallasbrill helps you get through the three CIPD levels (3,5, and 7). At the Foundation, Intermediate, and Advanced levels, Pallasbrill walks with you and ensures you get the right status.</span>
                                    </div>
                                </div>
                            </div>
                        </div>  
                  
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="categories-items">
                                <div class="cate-images">
                                    <a href="#"><img src="assets/images/categories/main-home/5.jpg" alt=""></a>
                                </div>
                                <div class="contents">
                                    <div class="content-wrap">
                                        <h2 class="title"><a href="#">Reports</a></h2>
                                        <span class="course-qnty">Getting the right certification by CIPD requires the completion of various reports, including HRC, PRM, and LMS. Pallasbrill helps you to develop quality reports that exceed expectations.</span>
                                    </div>
                                </div>
                            </div>
                        </div>  
          
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="categories-items">
                                <div class="cate-images">
                                    <a href="#"><img src="assets/images/categories/main-home/3.jpg" alt=""></a>
                                </div>
                                <div class="contents">
                                    <div class="content-wrap">
                                        <h2 class="title"><a href="#">presentations</a></h2>
                                        <span class="course-qnty">CIPD learning process requires the development of various presentations about various topics. Pallasbrill works with everyone to ensure an interactive and appealing presentation.

                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="categories-items">
                                <div class="cate-images">
                                    <a href="#"><img src="assets/images/categories/main-home/6.jpg" alt=""></a>
                                </div>
                                <div class="contents">
                                    <div class="content-wrap">
                                        <h2 class="title"><a href="#">CPD and Reflection</a></h2>
                                        <span class="course-qnty">Growth and development in CIPD involve reflection on the course content and experience and is a continuous process. Pallasbrill helps you develop smart goals and continuously update your CPD to achieve the milestones. </span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <h2 class="title white-color mb-16">Key Performance Indicator</h2>
                                    <div class="desc white-color pr-100 md-pr-0">Get access to quality and wide tutoring materials and services to meet your HR growth and development needs. 

                                        Guaranteed 100% free from plagiarism and high-quality services. 
                                        
                                        Timely delivery and 24/7 support availability. 
                                        
                                        High ROI on your investment in Pallasbrill tutoring and learning services.</div>
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
                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/style5/1.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Mahadi Monsura</a>
                                <span class="designation">Student</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/style5/2.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Alex Fenando</a>
                                <span class="designation">English Teacher</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/style5/3.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Losis Dcosta</a>
                                <span class="designation">Math Teacher</span>
                            </div>
                        </div>   
                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/style5/1.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Mahadi Monsura</a>
                                <span class="designation">Student</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/style5/2.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Alex Fenando</a>
                                <span class="designation">English Teacher</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt="">Professional, responsive, and able to keep up with ever-changing demand and tight deadlines: That’s how I would describe Jeramy and his team at The Lorem Ipsum Company. When it comes to content marketing, you’ll definitely get the 5-star treatment from the Lorem Ipsum Company.</div>
                                <div class="author-img">
                                    <img src="assets/images/testimonial/style5/3.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Losis Dcosta</a>
                                <span class="designation">Math Teacher</span>
                            </div>
                        </div>
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
            <div class="rs-newsletter style1 orange-color mb--90 sm-mb-0 sm-pb-70">
                <div class="container">
                    <div class="newsletter-wrap">
                        <div style="display: flex; flex-direction: column; gap: 1;">
                                   <div >
                                    <h5 style=" color:#ff5421;text-transform: uppercase;" >Accepted Payments</h5>
                                   </div>
                                   <div style="display: flex; align-items: center; justify-content: space-between;" >
                                       <div>
                                           <img style="height: 40px;" src="assets/images/updated/accepted_payments/paypal_0.png" alt="images">
                                       </div>                                     
                                       <div>
                                           <img style="height: 40px;" src="assets/images/updated/accepted_payments/visa_1.png" alt="images">
                                       </div>                                     
                                       <div>
                                           <img style="height: 40px;" src="assets/images/updated/accepted_payments/western_0.png" alt="images">
                                       </div>                                     
                                       <div>
                                           <img style="height: 40px;" src="assets/images/updated/accepted_payments/master_0.png" alt="images">
                                       </div>                                     
                                   </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter section end -->
    
@endsection