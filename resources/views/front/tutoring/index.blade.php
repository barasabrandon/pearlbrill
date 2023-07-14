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
                       <h2 class="title mb-10">Tutoring</h2>
                       <div class="blog-desc mb-20">
                           <p>
                             Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment. Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.
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
