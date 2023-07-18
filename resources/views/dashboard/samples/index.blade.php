@extends('layouts.dashboard')

@section('dashboard-content')
 <!-- container starts -->
 <div class="container-fluid">

    <!-- row -->
    <div class="element-area">
        <div class="demo-view">
            <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                <div class="row">
                    <!-- Column starts -->
                    <div class="col-xl-12">
                        <div class="card dz-card" id="accordion-one">
                            <div class="card-header flex-wrap">
                                <div>
                                    <h4 class="card-title text-uppercase">Samples table</h4>
                                </div>
                            </div>
                            <!--tab-content-->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="Preview" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <table id="example" class="display table"
                                                style="min-width: 845px">
                                                <thead>
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>Created At</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   @foreach ($samples as $item)
                                                   <tr>
                                                    <td>{{$item->title}}</td>
                                                    <td>{{$item->updated_at}}</td>
                                                    <td>
                                                        <a href="{{ route('dashboard.samples.edit', $item->id)}}" class="btn btn-primary">Edit</a>
                                                      
                                                    </td>
                                                    <td>
                                                        <form method="POST" action="{{ route('dashboard.samples.delete',  $item->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit">Delete</button>
                                                      </form>
                                                </td>
                                                </tr>
                                                   @endforeach                                                  
                                            
                                                </tbody>
                                                <tfoot>               
                                                    <th>Title</th>
                                                    <th>Created At</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /Default accordion -->
                                </div>
                                <div class="tab-pane fade " id="html" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="card-body pt-0 p-0 code-area">

                                    </div>
                                    <!-- /Default accordion -->
                                </div>
                            </div>
                            <!--/tab-content-->
                        </div>
                    </div>
                </div>
                <!-- Column ends -->


            </div>
        </div>
        @include('inc.datatables-links')
    </div>
</div>


    
@endsection