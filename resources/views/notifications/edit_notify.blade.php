
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
              <form role="form" method="post" action="{{route('notification.update',[$notification->id])}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Device</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="device" value="{{$notification->device}}">
                  </div>
                  
               

                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter phone" name="title" value="{{$notification->title}}">
                  </div>

                 
                 
                  <div class="form-group"> 
                                            <label>Message</label>
                                            <textarea class="form-control" rows="3" name="message">{{$notification->message}}</textarea>
                                        </div>

              
                                      
              
                 
                                      
                <div class="card-footer">
                  <button type="submit" class="btn btn-dark">Submit</button><br><br>
                </div>
              </form>
            </div>
          </div>
            <!-- /.card -->
@endsection