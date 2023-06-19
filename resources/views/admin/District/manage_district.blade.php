@extends('admin.admin_master')
@section('content')

<div class="container-full">
  

    <!-- Main content -->
    <section class="content">
      <div class="row">
          
        <div class="col-3 mt">

            <div class="box">
               <div class="box-header with-border">
                 <h3 class="box-title">Insert District Records</h3>
               </div>
               <!-- /.box-header -->
               <div class="container-fluid mt-3">
                <form action="{{route('store.dist.data')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label for="">District Name En</label>
                        <input type="text" name="dist_name"  class="form-control">
                        @error ('brand_name_en')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                    
             
                    <div class="form-group mt-2">
                        
                        <input type="submit" value="Add District"  class="btn btn-success btn-rounded btn-outline">
                    </div>

                </form>
               </div>
             </div>
             <!-- /.box -->
   
                   
           </div>
           <!-- /.col -->


        <div class="col-9">

         <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">District Records</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Sno</th>
                            <th>District Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dist as $dist)
                        
                        <tr>
                            <td>{{$dist->id}}</td>
                            <td>{{$dist->Dist_name}}</td>
                            
                            <td>
                              <a href="{{route('edit.dist',$dist->id)}}" class="btn btn-sm  btn-outline bg-info"><i class="bi bi-pencil-fill"></i></a>
                            </td>
                            <td>
                                <a id="delete" href="{{route('delete.dist',$dist->id)}}" class="btn btn-sm  btn-outline bg-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                      
                  </table>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

                
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  
  </div>

@endsection