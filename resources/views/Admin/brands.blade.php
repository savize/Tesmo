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
                      <h4>Brands</h4>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
  
                    <tbody>
                      @foreach ($brands as $item)
                      <tr>
                        <td>{{ $item->Title }}</td>
                        <td><img class="img" src="{{ asset('img/'. $item->Image) }}"; alt="" width="54"></td>
                        <td><a href="{{ route('brandEd', ['id'=> $item->id])}}">Update</a></td>
                        <td><a href="{{ route('brandDel', ['id'=> $item->id]) }}">Delete</a></td>
                      </tr>
                      @endforeach

                    </tbody>
    
                  </table>
                </div>
                <!-- /.card-body -->
    
              </div>
                <a class="m-3 btn btn-dark" href="{{ route('brandCr')}}">Create New Brand</a>
            </div>
  
      </div><!-- /.container-fluid -->
    </div>

@endsection
