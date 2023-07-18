@extends('layouts.dashboard')

@section('dashboard-content')
<div class="container-fluid">
				
    <!-- row -->
    <div class="d-flex justify-content-center align-items-center">
      
        <div class="col-xl-8 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-uppercase">Edit sample</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="POST" action="{{route('dashboard.samples.update', $sample->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <input type="text" value="{{$sample->title}}" name="title" class="form-control input-default " placeholder="Title of the sample">
                            </div>

                            <div class="mb-3">
                                <label for="">Sample Document</label>
                                <input type="file" name="file" class="form-control input-default " placeholder="sample Image.">
                            </div>

                            <div class="mb-3">
                                <textarea name="description" class="form-txtarea form-control" rows="8" id="comment">
                                    {{ old('text', $sample->description) }}
                                </textarea>
                             </div>

                            <div class="mb-3 d-flex float-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-scripts')    
	<script src="dashboard_assets/js/ckeditor/ckeditor.js"></script>
@endsection