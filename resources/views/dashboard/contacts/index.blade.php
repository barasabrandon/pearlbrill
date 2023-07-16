@extends('layouts.dashboard')

@section('dashboard-content')
 <!-- container starts -->
 <?php
$mailUsername = $_ENV['MAIL_USERNAME'];
echo $mailUsername;
?>

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
                                    <h4 class="card-title">Contacts Table</h4>
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
                                                        <th>Phone</th>
                                                        <th>Email</th>
                                                        <th>Subject</th>
                                                        <th>Message</th>
                                                        <th>Actions</th>
                                                        <th>Date </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   @foreach ($contacts as $item)
                                                    <tr>
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->phone}}</td>
                                                        <td>{{$item->email}}</td>
                                                        <td>{{$item->title}}</td>
                                                        <td>{{$item->message}}</td>
                                                        <td><a href="#" onclick="sendEmail();" class="btn btn-success">Send Email</a></td>
                                                        <td>{{$item->updated_at}}</td>
                                                       
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
       @include('inc.datatables-links')
    </div>
</div>


    
@endsection

@section('page-scripts')
<script>
    function sendEmail() {
      var receiver = 'receiver@example.com';
      var subject = 'Hello there';
      var cc = '';
      var body = 'Hi John,\n\nHope you\'re doing well.\n\nBest regards,\nJohn Doe';
      var from = '<?php echo $_ENV['MAIL_USERNAME']; ?>';
    
      var mailtoLink = 'mailto:' + receiver + '?subject=' + encodeURIComponent(subject) + '&cc=' + cc + '&body=' + encodeURIComponent(body) + '&from=' + from;
    
      window.location.href = mailtoLink;
    }
    </script>
    
@endsection