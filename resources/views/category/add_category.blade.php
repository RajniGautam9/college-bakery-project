@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Category Form</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Category Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post"  action="{{route('category.store')}}" enctype="multipart/form-data">
              @csrf     
              <div class="card-body">
                
                                    
       
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category_Name</label>
                     <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name">
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

               

                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Item</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter number of items" name="item">
                  </div>

                 
                 <div class="form-group">
                                                 <label for="exampleInputEmail1" required>Status</label> 
                                                <select id="select" class="form-control" name="status">
                                                    <option value="Active">Active</option>
                                                    <option value="Deactive">Inactive</option>
                                                </select>
                                            </div>
</div>
 
                <div class="card-footer">
                  <button type="submit" class="btn btn-dark">Submit</button><br><br>
                </div>
                <br>
              </form>
            </div>
          </div>
          </div> 

            <!-- /.card -->
@endsection