
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
                <h3 class="card-title">Order Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="{{route('order.store')}}" enctype="multipart/form-data">
                @csrf
              <div class="card-body">

              <div class="form-group">
                    <label for="exampleInputEmail1">Customer-Name</label>
                    <select id="select" class="form-control" name="customer_id" type="text">
                                                @foreach($customer as $customers)
                                                <option value="{{$customers->id}}">{{$customers->name}}</option>
                                                @endforeach
                                            </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Order No</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter order no..." name="order">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Amount</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter amount" name="amount">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Discount</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter discount" name="discount" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Amount</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter total amount" name="tamount">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Payment</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter payment" name="payment">
                  </div>
                 
                  <div class="form-group"> 
                                            <label>Message</label>
                                            <textarea class="form-control" rows="3" name="message" placeholder="Enter message"></textarea>
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