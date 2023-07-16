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
                                    <h4 class="card-title">Basic Datatable</h4>
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
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Reg date</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   @foreach ($users as $user)
                                                    <tr>
                                                        <td>{{$user->name}}</td>
                                                        <td>{{$user->email}}</td>
                                                        <td>{{$user->updated_at}}</td>
                                                        <td><a class="btn btn-danger" href="{{ route('users.destroy', $user->id) }}"
                                                            >Delete</a></td>
                                                    </tr>                                                       
                                                   @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Role</th>
                                                        <th>Reg date</th>
                                                        <th>Delete</th>
                                                    </tr>
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
        <div class="demo-right ">
            <div class="demo-right-inner" id="right-sidebar">
                <h4 class="title">DataTables</h4>
                <div class="dz-scroll demo-right-tabs" id="rightSidebarScroll">
                    <ul class="navbar-nav nav" id="menu-bar">
                        <li><a href="#accordion-one" class="scroll ">Users</a></li>
                        <li><a href="#accordion-two" class="scroll ">Contacts</a></li>
                        <li><a href="#accordion-three" class="scroll ">Blog</a></li>
                        <li><a href="#accordion-four" class="scroll ">Samples</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


    
@endsection