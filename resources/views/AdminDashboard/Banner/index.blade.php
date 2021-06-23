@extends('AdminDashboard.layout.master')
@section('title', 'Banner List')
@section('content')

  <div class="content-wrapper">

     <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Banner List</h1>
          </div>
       
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Banner Information</h3>
                 <button class="btn" style="float: right;" onclick="location.href='{{route('banner.create')}}'"><i class="fa fa-plus"></i></button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  @if (session('msg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('msg') }}
                        </div>
                    @endif
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($banners as $banner)
                  <tr>
                    <td>{{$banner->banner_id}}</td>
                
                   <!-- <td></td> -->
                   <td>{{$banner->name}}</td>
                   <td><img src="{{url('bannerImages/'.$banner->image)}}" height="50px" width="50px" /></td>

                    <td><div class="btn-group">
                    <button type="button" class="btn  btn-primary dropdown-toggle" data-toggle="collapse"data-target="#supplier{{$banner->banner_id}}">
                      <!-- <i class="fas fa-wrench"></i> -->
                      Action
                    </button>
                    <div class="dropdown-menu dropdown-menu-right collapse" role="menu" id="supplier{{$banner->banner_id}}">
                      <a data-toggle="modal" href="#myView" data-target="#myView{{$banner->banner_id}}" class="dropdown-item"><i class="fas fa-binoculars mr-1"></i>View</a>
                      <a data-toggle="modal" href="#myEdit" data-target="#myEdit{{$banner->banner_id}}" class="dropdown-item"><i class="fas fa-edit mr-1"></i>Edit</a>
                 

                      
                      <a data-toggle="modal" href="#myDelete" data-target="#myDelete{{$banner->banner_id}}" class="dropdown-item"><i class="fas fa-trash mr-1"></i>Delete</a>
                   
                    </div>
                  </div>
                </td>
                  </tr>
                  <!-- Modal -->
<div class="modal fade" id="myDelete{{$banner->banner_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Are you sure you want to delete ?
      </div>
      <div class="modal-footer">
        <form action="{{route('addBrand.destroy',$banner->banner_id)}}" method="post">
          @csrf
          @method('DELETE')
        <button type="submit" class="btn btn-primary">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myEdit{{$banner->banner_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('addBrand.update',$banner->banner_id)}}" method="post">
          @csrf
          @method('PUT')
      <div class="modal-body">
     <div class="card-body">
                    
                    
                  
                  <div class="form-group">
                    <label>Brand Name<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="brand_name" placeholder="Enter Brand Name" required="required" value="{{$brand->name}}">
                  </div>
                  <div class="form-group">
                    <label >Description<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="brand_description" placeholder="Enter Description" value="{{$brand->description}}">
                  </div>
                 
                  
                   <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control"name="brand_slug"placeholder="Enter Product" required="required" value="{{$brand->slug}}">
                  </div>

                 
                 
                </div>
      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </form>
      </div>
    </div>
  </div>
</div>
                  @endforeach
                   
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>

@endsection

