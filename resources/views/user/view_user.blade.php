
@extends('layouts.master')
@section('content')

<div class="content-wrapper">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">user Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Image</th>
                      <th>State</th>
                      
                      <th>profession</th>
                      <th>Country</th>
                      <th>Email</th>
                      <th>Address</th>
                     
                      <th>Mobile</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    @foreach($user as $user)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$user->name}}</td>
                      
                      <td><img src="{{asset('backend/image/'.$user->image)}}" style="height:50px; width:50px;"></td>
                      <td>{{$user->state}}</td>
                      <td>{{$user->profession}}</td>
                      <td>{{$user->country}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->address}}</td>
                      <td>{{$user->mobile}}</td>
                      <td>{{$user->status}}</td>
                     

                      
                     <td class="center"> <a href="{{route('user.edit',[$user->id])}}"><button class="btn btn-sm btn-danger">Edit</button></a>

                     <form role="form" method="post" action="{{route('user.destroy',[$user->id])}}">
                         @csrf
                        @method('DELETE')
                      <a href=""><button class="btn btn-sm btn-success">Delete</button></a> </form></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
</div>
        @endsection