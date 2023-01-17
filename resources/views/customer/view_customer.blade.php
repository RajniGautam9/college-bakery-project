<<<<<<< HEAD

@extends('layouts.master')
@section('content')

<div class="content-wrapper">
=======
@extends('layouts.master')
@section('content')

>>>>>>> 1c9f5e29dd928d4133aa88d8ad93d9438ac2114c
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
<<<<<<< HEAD
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
                      <td>{{$customer->image}}</td> 
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
=======
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-warning">Pending</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                   
                   
>>>>>>> 1c9f5e29dd928d4133aa88d8ad93d9438ac2114c
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
<<<<<<< HEAD
</div>
=======

>>>>>>> 1c9f5e29dd928d4133aa88d8ad93d9438ac2114c
        @endsection