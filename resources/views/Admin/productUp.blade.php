@extends('Admin.Layout.adminLayout')

@section('content')
    
<div class="card">
    <div class="card-body">
        <!-- /.card -->
            
            <form action="{{ route('prod-ed') }}" method="post">
                @csrf

                <div class="form-group">
                    <input class="form-control" id="inputdefault" type="hidden" name="id" value="{{ $product->id }}">

                    <input class="form-control" id="inputdefault" type="text" name="name" value="{{ $product->Name }}">
                </div>
                <div class="form-group">
                    <input class="form-control" id="inputdefault" type="text" name="price" value="{{ $product->Price }}">
                </div>

                <div class="form-group">
                    <label for="res">This product is for : </label>
                    <select class="form-control" name="brand" id="brand" class="form-select" aria-label="Default select example">
                        
                        @foreach ($brands as $item)
                      
                        @if ($item->id == $product->BrandId)
                        <option value="{{ $item->id }}"  selected>{{ $item->Title }}</option>
                        @else
                        <option value="{{ $item->id }}">{{ $item->Title }}</option>
                        @endif

                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="cat">Product Category : </label>
                    <select class="form-control" name="cat" id="cat" class="form-select" aria-label="Default select example">
                        @foreach ($categories as $item)

                        @if ($item->id == $product->CategId)
                        <option value="{{ $item->id }}" selected>{{ $item->Name }}</option>

                        @else
                        <option value="{{ $item->id }}">{{ $item->Name }}</option>

                        @endif
                    @endforeach
                    </select>
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