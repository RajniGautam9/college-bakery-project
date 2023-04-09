

@extends('layouts.master')
@section('content')
  <!-- Main content -->
  <div class="content-wrapper">
  <section class="content" >
      <div class="container-fluid" >
        <div class="row"  style="border-radius:50%;margin-left:200px;">
          <div class="col-md-6 p-15">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                
                  <img class="profile-user-img img-fluid img-circle"
                       src="#" style="height:100px;width:100px;border-radius:100px;"
                       alt="User profile picture">
                </div>

               <label> <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3></label>

                <p class="text-muted text-center"></p>

                <ul class="list-group list-group-unbordered mb-3">

                <li class="list-group-item">
                    <b>Profession</b> <a class="float-right">{{ Auth::user()->profession ?? '-' }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>City</b> <a class="float-right">{{ Auth::user()->state }}</a>
                  </li>
                  
                  <li class="list-group-item">
                    <b>address</b> <a class="float-right">{{ Auth::user()->address }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{ Auth::user()->email }}</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Edit</b></a>
              </div>

              <!-- /.card-body -->
            </div>
          </div>

            @endsection