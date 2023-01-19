
@extends('layouts.master')
@section('content')

<div class="content-wrapper">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Order Table</h3>

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
                      <th>Customer-Name</th>
                      <th>Order-No</th>
                      <th>Amount</th>
                      <th>Discount</th>
                      <th>Total-Amount</th>
                      <th>Payment</th>
                      <th>Message</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    @foreach($order as $order)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$order->name}}</td>
                      <td>{{$order->order}}</td> 
                      <td>{{$order->amount}}</td> 
                      <td>{{$order->discount}}</td> 
                      <td>{{$order->tamount}}</td> 
                      <td>{{$order->payment}}</td> 
                      <td>{{$order->message}}</td>
                      <td>{{$order->status}}</td>
                     

                      
                     <td class="center"> <a href="{{route('order.edit',[$order->id])}}"><button class="btn btn-sm btn-danger">Edit</button></a>

                     <form role="form" method="post" action="{{route('order.destroy',[$order->id])}}">
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