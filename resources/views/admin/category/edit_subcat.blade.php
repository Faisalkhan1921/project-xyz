@extends('admin.admin_master')
@section('content')

<div class="container-full">
  

    <!-- Main content -->
    <section class="content">
      <div class="row">
          
        <div class="offset-2 col-8 mt">

            <div class="box">
               <div class="box-header with-border">
                 <h3 class="box-title">Insert Category Records</h3>
               </div>
               <!-- /.box-header -->
               <div class="container-fluid mt-3">
                <form action="{{route('update.subcat.data',$data2->id)}}" method="post" >
                    @csrf

                    <div class="form-group">
                        <h5>Division Select <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="cat_id" class="form-control"  >
                                <option value="" selected="" disabled="">Select Division</option>
                                @foreach($data as $data)
                                <option {{$data->id == $data2->cat_id ? 'selected': ''}} value="{{$data->id}}">{{$data->category_name}}</option>
                                @endforeach
                            </select>
                            @error('cat_id') 
                         <span class="text-danger">{{ $message }}</span>
                         @enderror 
                         </div>
                    </div>

                    <div class="form-group">
                        <label for="">SubCategory Name En</label>
                        <input type="text" name="subcat_name"  class="form-control" value="{{$data2->subcat_name}}">
                        @error ('cat_name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                

                    
             
                    <div class="form-group mt-2">
                        
                        <input type="submit" value="Update Category"  class="btn btn-success btn-rounded btn-outline">
                        <a href="{{route('manage.sub_cat')}}"   class="btn btn-danger btn-rounded btn-outline">Cancel </a>
                    </div>

                </form>
               </div>
             </div>
             <!-- /.box -->
   
                   
           </div>
           <!-- /.col -->


     
      <!-- /.row -->
    </section>
    <!-- /.content -->
  
  </div>

@endsection