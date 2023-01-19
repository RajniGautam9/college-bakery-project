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
<<<<<<< HEAD:resources/views/Delivery_System/edit_delivery.blade.php
                <h3 class="card-title">Delivery Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="{{route('delivery.update',[$delivery->id])}}">
                                    @csrf
                                    @method('PUT') 
=======
                <h3 class="card-title">Store Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route('stores.store')}}" enctype="multipart/form-data">
                @csrf
>>>>>>> c66d10f53d0a8c64bc6e7ac348b8e5be88ba7b8f:resources/views/stores/add_stores.blade.php
                <div class="card-body">
               
                  <div class="form-group">
<<<<<<< HEAD:resources/views/Delivery_System/edit_delivery.blade.php
                  <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="{{$delivery->name}}" name="name">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="address" class="form-control" id="exampleInputPassword1" placeholder="Enter address" value="{{$delivery->address}}" name="address">
=======
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
>>>>>>> c66d10f53d0a8c64bc6e7ac348b8e5be88ba7b8f:resources/views/stores/add_stores.blade.php
                  </div>
               

                  <div class="form-group">
<<<<<<< HEAD:resources/views/Delivery_System/edit_delivery.blade.php
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter phone" value="{{$delivery->phone}}" name="phone">
=======
                    <label for="exampleInputPassword1">Registration No</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter registration" name="reg">
>>>>>>> c66d10f53d0a8c64bc6e7ac348b8e5be88ba7b8f:resources/views/stores/add_stores.blade.php
                  </div>

                 

                  <div class="form-group">
                    <label for="exampleInputPassword1">Payment</label>
                    <select id="select" class="form-control" name="payment" value="{{$delivery->payment}}">
                                                    <option value="cash">cash</option>
                                                    <option value="Debit card">Debit card</option>
                                                    <option value="credit card">credit card</option>
                                                </select>
                  </div>
<<<<<<< HEAD:resources/views/Delivery_System/edit_delivery.blade.php
                 
                 <div class="form-group">
=======

                  <div class="form-group">
                    <label for="exampleInputPassword1">City</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter city" name="city">
                  </div>
                 
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter address" name="email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Mobile No</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter mobile no" name="mobile">
                  </div>

                  <div class="form-group">
>>>>>>> c66d10f53d0a8c64bc6e7ac348b8e5be88ba7b8f:resources/views/stores/add_stores.blade.php
                                                 <label for="field" name="status" required>Status</label> 
                                                <select id="select" class="form-control" name="status" value="{{$delivery->status}}">
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