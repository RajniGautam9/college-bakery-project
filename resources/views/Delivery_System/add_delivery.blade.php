@extends('layouts.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Delivery Form</h1>
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
                <h3 class="card-title">Delivery Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                <form role="form" method="post"  action="{{route('delivery.store')}}" enctype="multitype/form-data">
                                    
                   @csrf                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="address" class="form-control" id="exampleInputPassword1" placeholder="Enter address" name="address">
                  </div>
               

                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter phone" name="phone">
                  </div>

                 

                  <div class="form-group">
                    <label for="exampleInputPassword1">Payment</label>
                   
                                                <select id="select" class="form-control" name="payment">
                                                    <option value="cash">cash</option>
                                                    <option value="Debit card">Debit card</option>
                                                    <option value="credit card">credit card</option>
                                                </select>
                                            </div>
                  
                 
                 <div class="form-group">
                                                 <label for="exampleInputPassword1" required>Status</label> 
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
            <!-- /.card -->
@endsection