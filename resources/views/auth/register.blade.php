@extends('layouts.app')

@section('front-content')
<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Register</h1>
            <ul>
                <li>
                    <a class="active" href="index.html">Home</a>
                </li>
                <li>Register</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->            

    <!-- Register Section -->
    <section class="register-section pt-100 pb-100">
        <div class="container">
            <div class="register-box">
                
                <div class="sec-title text-center mb-30">
                    <h2 class="title mb-10">Create New Account</h2>
                </div>
                
                <!-- Login Form -->
                <div class="styled-form">
                    <div id="form-messages"></div>
                    <form id="contact-form" method="POST" action="{{ route('register')}}"> 
                        @csrf                              
                        <div class="row clearfix">                                    
                            <!-- Form Group -->
                            <div class="form-group col-lg-12 mb-25">
                                <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"  placeholder="Full Name" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                                            
                           
                            
                            <!-- Form Group -->
                            <div class="form-group col-lg-12">
                                             <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            
                           
                    

                            <!-- Form Group -->
                            <div class="form-group col-lg-12">
                                <input type="password" id="puser" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> 
                           
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    

                            <!-- Form Group -->
                            <div class="form-group col-lg-12">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                                <button type="submit" class="readon register-btn"><span class="txt">Sign Up</span></button>
                            </div>
                            
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="users">Already have an account? <a href="/login">Sign In</a></div>
                            </div>
                            
                        </div>
                        
                    </form>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Login Section --> 

</div> 
<!-- Main content End --> 
@endsection
