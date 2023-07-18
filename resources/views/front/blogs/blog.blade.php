@extends('layouts.app')

@section('front-content')
	<!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{ asset('assets/images/breadcrumbs/2.jpg')}}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Blog</h1>
                <ul>
                    <li>
                        <a class="active" href="/">Home</a>
                    </li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->            

       <!-- Blog Section Start -->
        <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
               <div class="blog-deatails">
                    
                    <div class="bs-img">
                        <a href="#"><img style="max-height: 30rem; width: 100%;" src="{{ asset('uploads/blogs/')}}/{{$blog->image_url}}" alt=""></a>
                    </div>
                   <div class="blog-full">
                       <ul class="single-post-meta">
                           <li>
                               <span class="p-date"> <i class="fa fa-calendar-check-o"></i> {{$blog->updated_at->format('F d, Y')}} </span>
                           </li> 
                           <li>
                               <span class="p-date"> <i class="fa fa-user"></i> {{$blog->author_name}} </span>
                           </li> 
                       </ul>
                       <div class="blog-desc">
                           <h2>
                            {{$blog->title}}
                           </h2>
                       </div>
                       <div class="blog-desc">
                           <p>
                            {{$blog->text}}
                           </p>
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

@endsection
