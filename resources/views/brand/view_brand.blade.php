
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
                      <th>Category</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    @foreach($brand as $brand)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$brand->name}}</td>
                      <td><img src="{{asset('backend/image/'.$brand->image)}}" style="height:50px;width:50px;"></td>
                      <td>{{$brand->category->name}}</td>
                      <td class="centre" style="display:flex;">
                          
                          @if($brand['status']=='on')                              
                              <a href="{{ url('brands/offStatus',$brand->id) }}"><button class="btn btn-danger btn-sm" type="reset">De-Active</button></a>

                                @else($brand['status']=='off') 
                                  <a href="{{ url('brands/onStatus',$brand->id) }}"><button class="btn btn-warning btn-sm" type="reset">Active</button></a>

                            @endif
                             &nbsp;
                             <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewBatch{{$brand->id}}"><i class="fas fa-eye"></i></button> 
                            &nbsp;
</td>
                      
                     <td class="center"> <a href="{{route('brands.edit',[$brand->id])}}"><button class="btn btn-sm btn-danger">Edit</button></a>

                     <form role="form" method="post" action="{{route('brands.destroy',[$brand->id])}}">
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