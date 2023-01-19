
@extends('layouts.master')
@section('content')

<div class="content-wrapper">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>

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
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Gender</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    @foreach($customer as $customer)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$customer->name}}</td>
                      <td><img src="{{asset('backend/image/'.$customer->image)}}" style="height:50px;width:50px;"></td>
                      <td>{{$customer->phone}}</td>
                      <td>{{$customer->address}}</td>
                      <td>{{$customer->gender}}</td>
                      <td>{{$customer->email}}</td>
                      <td>{{$customer->status}}</td>
                     

                      
                     <td class="center"> <a href="{{route('customer.edit',[$customer->id])}}"><button class="btn btn-sm btn-danger">Edit</button></a>

                     <form role="form" method="post" action="{{route('customer.destroy',[$customer->id])}}">
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