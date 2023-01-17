@extends('layouts.master')
@section('content')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>
                <button type="submit" class="btn btn-primary float-right">Add</button></td>
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
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Payment</th>
                      <th>Status</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach $delivery as @delivery
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$delivery->name}}</td>
                      <td>{{$delivery->address}}</td>
                      <td>{{$delivery->phone}}</td>
                      <td>{{$delivery->payment}}</td>
                      <td>{{$delivery->status}}</td>
                      <td><a href="{{route('delivery.edit',[$delivery->id])}}"> <button type="button" class="btn btn-sm">Edit</button></a>
                                           <form role="form" method="post" action="{{route('delivery.destroy',[$delivery->id])}}">
                                    @csrf  
                                    @method('DELETE')
                                           
                                            <button type="submit" class="btn btn-sm">Delete</button></td>
                                           
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
        @endsection