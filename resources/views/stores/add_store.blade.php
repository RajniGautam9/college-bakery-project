
@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>General Form</h1>
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
                <h3 class="card-title"> Store Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="{{route('stores.store')" enctype="multipart/form-data">
                @csrf
               
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Store name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">PAN No</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter pan no" name="pan">
                  </div>
                  
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter phone" name="call">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Registration No</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter registration" name="reg">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="address" class="form-control" id="exampleInputPassword1" placeholder="Enter address" name="address">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">City</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter city" name="city">
                  </div>
                 
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter email" name="email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Mobile No</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter mobile no" name="mobile" >
                  </div>

                  <div class="form-group">
                                                 <label for="field" name="status" required>Status</label> 
                                                <select id="select" class="form-control" name="status" >
                                                    <option value="Active">Active</option>
                                                    <option value="Deactive">Inactive</option>
                                                </select>
                                            </div>
                                      
                <div class="card-footer">
                  <button type="submit" class="btn btn-dark">Submit</button><br><br>
                </div>
              </form>
            </div>
          </div>
            <!-- /.card -->
@endsection