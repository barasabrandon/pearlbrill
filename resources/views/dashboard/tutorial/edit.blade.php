@extends('layouts.dashboard')

@section('page-style')
<style>
    .form-txtarea {
        height: auto;
        min-height: 50px; /* Set a minimum height to prevent it from collapsing completely */
        resize: vertical; /* Allow vertical resizing */
    }
</style>
@endsection

@section('dashboard-content')
<div class="container-fluid">
				
    <!-- row -->
    <div class="d-flex justify-content-center align-items-center">
      
        <div class="col-xl-8 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">TUTORING</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="POST" action="{{ route('tutoring.update', $item->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <input type="text" value="{{$item->title}}" name="title" class="form-control input-default " placeholder="eg Tutoring">
                            </div>

                            <div class="mb-3">
                                <textarea name="text" class="form-txtarea form-control" rows="8" id="comment">
                                    {{ old('text', $item->text) }}
                                </textarea>
                            
                            </div>

                            <div class="mb-3 d-flex float-right">
                                <button type="submit" class="btn btn-primary">Update</button>
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