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
                <h1 class="page-title">Tutoring</h1>
                <ul>
                    <li>
                        <a class="active" href="/">Home</a>
                    </li>
                    <li>Tutoring</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->            

       <!-- Blog Section Start -->
        <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
               <div class="blog-deatails">
                   <div class="blog-full">
                       <h2 class="title mb-10">{{$item->title}} 
                        @role('admin') 
                        :  <a href="{{ route('tutoring.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                        @endrole</h2>
                       <div class="blog-desc mb-20">
                        <p>{{$item->text}}</p>
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
