@extends('layouts.app')

@section('front-content')
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="assets/images/breadcrumbs/5.jpg" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color padding">
                <h1 class="page-title white-color">Contact Us</h1>
                <ul>
                    <li>
                        <a class="active" href="index.html">Home</a>
                    </li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Contact Section Start -->
        <div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row rs-contact-box mb-90 md-mb-50">
                    <div class="col-lg-4 col-md-12-4 lg-pl-0 sm-mb-30 md-mb-30">
                        <div class="address-item">
                            <div class="icon-part">
                                <img src="assets/images/contact/icon/1.png" alt="">
                            </div>
                            <div class="address-text">
                                <span class="label">Address</span>
                                <span class="des">228-5 Main Street, Georgia, USA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 lg-pl-0 sm-mb-30 md-mb-30">
                        <div class="address-item">
                            <div class="icon-part">
                                <img src="assets/images/contact/icon/2.png" alt="">
                            </div>
                            <div class="address-text">
                                <span class="label">Email Address</span>
                                <span class="des"><a href="mailto:info@rstheme.com">info@rstheme.com</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 lg-pl-0 sm-mb-30">
                        <div class="address-item">
                            <div class="icon-part">
                                <img src="assets/images/contact/icon/3.png" alt="">
                            </div>
                            <div class="address-text">
                                <span class="label">Phone Number</span>
                                <span class="des"><a href="tel+0885898745">(+088)589-8745</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rs-quick-contact">
                    <div class="inner-part text-center mb-50">
                        <h2 class="title mb-15">Send A Message</h2>
                    </div>
                    <form method="POST" action="{{route('contactus.store')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 mb-35 col-md-12">
                                <input class="from-control" type="text" id="name" name="name" placeholder="Name"
                                    required=""/>
                            </div>
                            <div class="col-lg-6 mb-35 col-md-12">
                                <input class="from-control" type="text" id="email" name="email" placeholder="Email"
                                    required="" />
                            </div>
                            <div class="col-lg-6 mb-35 col-md-12">
                                <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone"
                                    required=""/>
                            </div>
                            <div class="col-lg-6 mb-35 col-md-12">
                                <input class="from-control" type="text" id="subject" name="title"
                                    placeholder="Subject" required="" />
                            </div>
                    
                            <div class="col-lg-12 mb-50">
                                <textarea class="from-control" id="message" name="message" placeholder=" Message" required></textarea>
                            </div>
                        </div>
                       
                        <div class="form-group mb-0">
                            <input class="btn-send" type="submit" value="Submit Now">
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

        <!-- Newsletter section start -->
        @include('inc.newsletter')
        <!-- Newsletter section end -->
    </div>
    <!-- Main content End -->
@endsection
