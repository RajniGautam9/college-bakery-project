
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
                <h3 class="card-title">Customer Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="{{route('stores.update',[$store->id])}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Store name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name" value="{{$store->name}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">PAN No</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="pan" value="{{$store->pan}}">
                  </div>
                  
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter phone" name="call" value="{{$store->call}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Registration No</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter registration" name="reg" value="{{$store->reg}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="address" class="form-control" id="exampleInputPassword1" placeholder="Enter address" name="address" value="{{$store->address}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">City</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter city" name="city" value="{{$store->city}}">
                  </div>
                 
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter email" name="email" value="{{$store->email}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Mobile No</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter mobile no" name="mobile" value="{{$store->mobile}}">
                  </div>

                  <div class="form-group">
                                                 <label for="field" name="status" required>Status</label> 
                                                <select id="select" class="form-control" name="status" value="{{$store->status}}">
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