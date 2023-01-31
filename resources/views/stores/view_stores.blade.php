
@extends('layouts.master')
@section('content')

<div class="content-wrapper">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Store Table</h3>

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
                      <th>PAN</th>
                      <th>Phone</th>
                      <th>Registration</th>
                      <th>Address</th>
                      <th>City</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    @foreach($store as $store)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$store->name}}</td>
                      <td>{{$store->pan}}</td> 
                      <td>{{$store->call}}</td>
                      <td>{{$store->reg}}</td>
                      <td>{{$store->address}}</td>
                      <td>{{$store->city}}</td>
                      <td>{{$store->email}}</td>
                      <td>{{$store->mobile}}</td>
                      <td class="centre" style="display:flex;">
                          
                          @if($store['status']=='on')                              
                              <a href="{{ url('stores/offStatus',$store->id) }}"><button class="btn btn-danger btn-sm" type="reset">De-Active</button></a>

                                @else($store['status']=='off') 
                                  <a href="{{ url('stores/onStatus',$store->id) }}"><button class="btn btn-warning btn-sm" type="reset">Active</button></a>

                            @endif
                             &nbsp;
                             <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewBatch{{$store->id}}"><i class="fas fa-eye"></i></button> 
                            &nbsp;
</td>
                     

                      
                     <td class="center"> <a href="{{route('stores.edit',[$store->id])}}"><button class="btn btn-sm btn-danger">Edit</button></a>

                     <form role="form" method="post" action="{{route('stores.destroy',[$store->id])}}">
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