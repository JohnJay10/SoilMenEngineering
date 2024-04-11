@extends('layouts.app')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                 <a href="{{ route('Quality-Control.index') }}" class="btn btn-warning">GO BACK</a> 
            </div><br><br>
            <div>
                <h3 class="card-description" style="font: 500;">
                    EDIT QUALITY CONTROL POST
                </h3>
            </div>
            <br><br>
            
           
            <form class="forms-sample" method="post" action="{{ route('Quality-Control.update', $QualityControl->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control" id="exampleInputName1" value="{{ $QualityControl->title }}" placeholder="Title of your post" name="title" required>
                </div>

                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="image" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="{{ route('Quality-Control.index') }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection

