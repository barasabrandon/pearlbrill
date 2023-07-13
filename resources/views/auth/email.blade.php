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
            <h1 class="page-title">My Account</h1>
            <ul>
                <li>
                    <a class="active" href="index.html">Home</a>
                </li>
                <li>My Account</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->            

    <!-- My Account Section Start -->
    <div class="rs-login pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="noticed">
                <div class="main-part">                           
                    <div class="method-account">
                        <h2 class="login">Password Reset</h2>
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                           @endif
                        <form method="POST" action="{{ route('password.email') }}">
                           @csrf
                            <input id="email" placeholder="Enter Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                           
                            
                            <button type="submit" class="readon submit-btn">Send Password Reset Link</button>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- My Account Section End -->  

</div> 
<!-- Main content End --> 
    
@endsection