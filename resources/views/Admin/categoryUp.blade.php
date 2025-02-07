@extends('Admin.Layout.adminLayout')

@section('content')
    
<div class="card">
    <div class="card-body">
        <!-- /.card -->
        
            <form action="{{ route('cat-ed') }}" method="post">
                @csrf
                
                <div class="form-group">
                    <input class="form-control" id="inputdefault" type="hidden" name="id" value="{{ $category->id }}">
                    <input class="form-control" id="inputdefault" type="text" name="name" value="{{ $category->Name }}">
                </div>

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