@extends('admin.admin_master')
@section('content')

<div class="container-full">
  

    <!-- Main content -->
    <section class="content">
      <div class="row">
          
        <div class="col-3 mt">

            <div class="box">
               <div class="box-header with-border">
                 <h3 class="box-title">Insert Category Records</h3>
               </div>
               <!-- /.box-header -->
               <div class="container-fluid mt-3">
                <form action="{{route('store.subcat.data')}}" method="post" >
                    @csrf

                    <div class="form-group">
                        <h5>Division Select <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="cat_id" class="form-control"  >
                                <option value="" selected="" disabled="">Select Division</option>
                                @foreach($data as $data)
                                <option value="{{ $data->id }}">{{ $data->category_name }}</option> 
                                @endforeach
                            </select>
                            @error('cat_id') 
                         <span class="text-danger">{{ $message }}</span>
                         @enderror 
                         </div>
                    </div>

                    <div class="form-group">
                        <label for="">SubCategory Name En</label>
                        <input type="text" name="subcat_name"  class="form-control">
                        @error ('cat_name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                

                    
             
                    <div class="form-group mt-2">
                        
                        <input type="submit" value="Add Category"  class="btn btn-success btn-rounded btn-outline">
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
              <h3 class="box-title">Categories Records</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Sno</th>
                            <th>Category Name</th>
                            <th>SubCategory Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data2 as $data)
                        
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data['category']['category_name']}}</td>
                            <td>{{$data->subcat_name}}</td>
                            
                            <td>
                                <a href="{{route('edit.subcat',$data->id)}}" class="btn btn-sm  btn-outline bg-info"><i class="bi bi-pencil-fill"></i></a>
                              </td>
                              <td>
                                  <a id="delete" href="{{route('delete.subcat',$data->id)}}" class="btn btn-sm  btn-outline bg-danger"><i class="bi bi-trash"></i></a>
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