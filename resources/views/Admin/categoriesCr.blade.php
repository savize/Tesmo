@extends('Admin.Layout.adminLayout')

@section('content')
    
<div class="card">
    <div class="card-body">
        <!-- /.card -->
        
            <form action="{{ route('cat-post') }}" method="post">
                @csrf
                
                <div class="form-group">
                    <input class="form-control" id="inputdefault" type="text" name="name" placeholder="Category Name">
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
                            <input class="btn btn-primary col-2 text-center" type="submit" value="Create">
                        </div>
                      </div>
                </div>
            </form>

    </div>
</div>

@endsection