@extends('Admin.Layout.adminLayout')
@section('content')

  <div class="content-header">
    <div class="container-fluid">
             
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
    
                  <!-- /.card -->
    
                  <div class="card">
                    <div class="card-header">
                      <h4>Products</h4>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Price (£)</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
  
                    <tbody>
                      @foreach ($products as $item)
                      <tr>                     
                        <td>{{ $item->Name }}</td>
                        <td>{{ $item->Price }}</td>
                        <td>{{ $item->category()->first()->Name}}</td>
                        <td>{{ $item->brand()->first()->Title}}</td>
                        <td><a href="{{ route('prodEd' , ['id'=> $item->id])}}">Update</a></td>
                        <td><a href="{{ route('prodDel', ['id'=> $item->id]) }}">Delete</a></td>
                      </tr>
                      @endforeach

                    </tbody>
    
                  </table>
                </div>
                <!-- /.card-body -->
    
              </div>
                <a class="m-3 btn btn-dark" href="{{ route('prodCr') }}">Create New Product</a>
            </div>
  
      </div><!-- /.container-fluid -->
    </div>

@endsection
