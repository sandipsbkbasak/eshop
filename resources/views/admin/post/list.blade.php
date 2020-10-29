@extends('admin.layout.layout')
@section('page_title', 'Post Listing')
@section('page_contents')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Post Liting</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin/post/list') }}">Home</a></li>
              <li class="breadcrumb-item active">Post Liting</li>
            </ol>
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
                <a href="{{ url('/admin/post/add') }}" class="btn btn-primary">Add Post</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>

                  <tr>
                    <th>Sl.No</th>
                    <th>Title</th>
                    <th>Short Description</th>
                    <th>Post Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Internet</td>
                    <td>Win 95+</td>
                    <td> Trident</td>
                    <td> 
                        <button type="button" class="btn btn-block btn-primary">Active</button>

                        <!--<button type="button" class="btn btn-block btn-danger">Inactive</button>-->
                    </td>
                    <td>
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a> |
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  
                  </tbody>
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
  <!-- /.content-wrapper -->

@endsection