@extends('AdminDashboard.layout.master')
@section('title', 'Banner Create')
@section('content')



  <!-- /.navbar -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

     <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>Category List</h1> -->
          </div>
       
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <!-- <div class="col-3">
          </div> -->
          <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Banner</h3>
              </div>


              <!-- /.card-header -->
              <!-- form start -->
               <form action="{{route('banner.store')}}" method="post" enctype="multipart/form-data" id="Supplierform">    
  @csrf
                <div class="card-body">
                    
                    @if (session('msg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('msg') }}
                        </div>
                    @endif
                  
                  <div class="form-group">
                    <label>Banner Name<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Banner Name" required="required" >
                  </div>
               
                  <div class="form-group">
                    <label>Banner Image</label>
                    <input type="file" class="form-control"name="image">
                  </div>
                
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
           
            <!-- /.card -->

            <!-- /.card -->

            
            <!-- /.card -->
          
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
          
          
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>

<!-- ./wrapper -->



