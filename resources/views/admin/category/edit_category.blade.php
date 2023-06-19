@extends('admin.admin_master')
@section('content')

<div class="container-full">
  

    <!-- Main content -->
    <section class="content">
      <div class="row">
          
        <div class="offset-2 col-9 mt">

            <div class="box">
               <div class="box-header with-border">
                 <h3 class="box-title">Insert Category Records</h3>
               </div>
               <!-- /.box-header -->
               <div class="container-fluid mt-3">
                <form action="{{route('update.cat.data',$data->id)}}" method="post"  >
                    @csrf
                    <div class="form-group">
                        <label for="">Category Name En</label>
                        <input type="text" name="cat_name"  class="form-control" value="{{$data->category_name}}">
                        @error ('cat_name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                    
             
                    <div class="form-group mt-2">
                        
                        <input type="submit" value="Update Category"  class="btn btn-success btn-rounded btn-outline">
                        <a href="{{route("manage.categories")}}"  class="btn btn-danger btn-rounded btn-outline">Cancel</a>
                    </div>

                </form>
               </div>
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