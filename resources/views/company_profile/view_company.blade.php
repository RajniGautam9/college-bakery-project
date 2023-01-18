
@extends('layouts.master')
@section('content')

<div class="content-wrapper">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Company Profile Table</h3>

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
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Website</th>
                      <th>Image</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    @foreach($company as $company)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$company->name}}</td>
                      <td>{{$company->email}}</td> 
                      <td>{{$company->phone}}</td>
                      <td>{{$company->address}}</td>
                      <td>{{$company->website}}</td>
                      <td>{{$company->image}}</td>
                      <td>{{$company->details}}</td>
                     

                      
                     <td class="center"> <a href="{{route('company.edit',[$company->id])}}"><button class="btn btn-sm btn-danger">Edit</button></a>

                     <form role="form" method="post" action="{{route('company.destroy',[$company->id])}}">
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