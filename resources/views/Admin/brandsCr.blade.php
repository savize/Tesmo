@extends('Admin.Layout.adminLayout')

@section('content')
    
<div class="card">
    <div class="card-body">
        <!-- /.card -->
        
            <form action="{{ route('brand-post') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    @csrf
                    <input class="form-control" id="inputdefault" type="text" name="name" placeholder="Brand Name">
                </div>

                <div class="form-group">
                    <label>Upload Image:</label>
                    <input class="form-control" id="inputdefault" type="file" name="img" placeholder="Upload">
                </div>
            
                <div class="form-group">
                    <div class="row">
                        <div class="col text-center">
                            <input class="btn btn-primary col-2 text-center" type="submit" value="Create">
                        </div>
                      </div>
                </div>
                
            </form>

    </div>
</div>

@endsection