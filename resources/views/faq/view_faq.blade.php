@extends('layouts.master')
@section('content')
<div class="content-wrapper">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>
                <div class="card-tools">
                <button type="submit" class="btn btn-primary">Add Delivery</button><br><br>
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
                      <th>Question</th>
                      <th>Answer</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($faq as $faq)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$faq->question}}</td>
                      <td>{{$faq->answer}}</td>
                      <td><a href="{{route('faq.edit',[$faq->id])}}"> <button type="button" class="btn btn-sm">Edit</button></a>
                                           <form role="form" method="post" action="{{route('faq.destroy',[$delivery->id])}}">
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
</div>
        @endsection