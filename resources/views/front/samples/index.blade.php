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
            <h1 class="page-title">Samples</h1>
            <ul>
                <li>
                    <a class="active" href="/">Home</a>
                </li>
                <li>Samples</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->            

    <!-- Blog Section Start -->
    <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <livewire:search-samples />
               
                <div class="col-lg-8">
                    <div class="row">
                       <div class="col-lg-12 mb-70">
                        @foreach ($samples as $item)
                        <div class="blog-item mb-15">
                            <div class="blog-content">
                                <h3 class="blog-title">
                                    <a href="#">
                                   {{$item->title}}
                                   </a>
                                </h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fa fa-calendar-check-o"></i> 
                                                {{$item->updated_at->format('F d, Y')}}                                                 
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author">
                                                <i class="fa fa-user"></i> {{$item->author_name}}
                                            </div>
                                        </li>  
                                    </ul>
                                </div>
                                <div class="blog-desc">   
                                    {{ rtrim(implode(' ', array_slice(explode(' ', $item->description), 0, 50)), ' ') . '...' }}
                                </div>
                                <div class="blog-button">
                                    <a class="blog-btn" href="{{route('sample', $item->id)}}">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
