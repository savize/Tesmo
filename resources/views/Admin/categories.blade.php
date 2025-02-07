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
                      <h4>Categories</h4>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
  
                    <tbody>
                      @foreach ($categories as $item)
                      <tr>
                        <td>{{ $item->Name }}</td>
                        <td><a href="{{ route('catEd', ['id'=> $item->id])}}">Update</a></td>
                        <td><a href="{{ route('catDel', ['id'=> $item->id]) }}">Delete</a></td>
                      </tr>
                      @endforeach
                    </tbody>
    
                  </table>
                </div>
                <!-- /.card-body -->
    
              </div>
                <a class="m-3 btn btn-dark" href="{{ route('catCr') }}">Create New Category</a>
            </div>
  
      </div><!-- /.container-fluid -->
    </div>

@endsection
