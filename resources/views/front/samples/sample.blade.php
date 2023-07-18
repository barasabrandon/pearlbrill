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
                <h1 class="page-title">Sample</h1>
                <ul>
                    <li>
                        <a class="active" href="/">Home</a>
                    </li>
                    <li>Sample</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->            

       <!-- Blog Section Start -->
        <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
               <div class="blog-deatails">
                   <div class="blog-full">
                       <h2 class="title mb-10">  {{$sample->title}}
                      </h2>
                       <div class="blog-desc mb-20">
                           <p>
                              {{$sample->description}}
                           </p>

                           <p>
                            @if ($sample->doc_url !== null)
                             <a href="/uploads/samples/{{$sample->doc_url}}">Download</a>                                
                            @endif
                           </p>
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
