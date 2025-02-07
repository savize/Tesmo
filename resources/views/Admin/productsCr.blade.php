@extends('Admin.Layout.adminLayout')

@section('content')
    
<div class="card">
    <div class="card-body">
        <!-- /.card -->
            
            <form action="{{ route('prod-post') }}" method="post">
                @csrf

                <div class="form-group">
                    <input class="form-control" id="inputdefault" type="text" name="name" placeholder="Product Name">
                </div>
                <div class="form-group">
                    <input class="form-control" id="inputdefault" type="text" name="price" placeholder="Price">
                </div>

                <div class="form-group">
                    <label for="res">This product is for : </label>
                    <select class="form-control" name="brand" id="brand" class="form-select" aria-label="Default select example">
                        @foreach ($brands as $item)
                            <option value="{{ $item->id }}">{{ $item->Title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="cat">Product Category : </label>
                    <select class="form-control" name="cat" id="cat" class="form-select" aria-label="Default select example">
                        @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->Name }}</option>
                    @endforeach
                    </select>
                </div>

                {{-- @if ($errors->any())
                {[@dd($errors);]}
                <div class="alert alert-danger">
                    <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
            @endif --}}

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