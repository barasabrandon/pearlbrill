@extends('layouts.dashboard')

@section('dashboard-content')
<div class="container-fluid">
				
    <!-- row -->
    <div class="d-flex justify-content-center align-items-center">
      
        <div class="col-xl-8 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-uppercase">Testmonials</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="POST" action="{{route('testmonials.update', $item->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <input type="text" value="{{$item->author_name}}" name="author_name" class="form-control input-default " placeholder="Author Name">
                            </div>

                            <div class="mb-3">
                                <input type="text" value="{{$item->author_occupation}}" name="author_occupation" class="form-control input-default " placeholder="Author Occupation eg Teacher">
                            </div>

                            <div class="mb-3">
                                <label for="">Author Image</label>
                                <input type="file" name="file" class="form-control input-default " placeholder="Author Image.">
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