@extends('Admin.Layout.adminLayout')

@section('content')
    
<div class="card">
    <div class="card-body">
        <!-- /.card -->
        
            <form action="{{ route('brand-ed') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    @csrf
                    
                    <input class="form-control" id="inputdefault" type="hidden" name="id" value="{{ $brand->id }}">
                    <input class="form-control" id="inputdefault" type="text" name="name" value="{{ $brand->Title }}">
                </div>

                <div class="form-group">
                    <input class="form-control" id="inputdefault" type="file" name="img" value="{{ $brand->Image }}">
                </div>
                <div class="form-group">
                    <img class="img" src="{{ asset('img/'. $brand->Image) }}"; alt="" width="54">
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
            @endif
            
                <div class="form-group">
                    <div class="row">
                        <div class="col text-center">
                            <input class="btn btn-primary col-2 text-center" type="submit" value="Update">
                        </div>
                      </div>
                </div>
                
            </form>
    </div>
</div>

@endsection