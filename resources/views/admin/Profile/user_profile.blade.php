@extends('admin.admin_master')
@section('content')
	<div class="container-full">  
        <div class="row">
            <div class="col-md-12 ml-1">
                <!-- Main content -->
		<div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('../images/gallery/full/10.jpg') center center;">
              <h3 class="widget-user-username"><b>{{$data->name}}</b></h3>

              <a href="{{route('edit.profile.pic')}}" style="float: right" class="btn btn-rounded btn-success mb-5">Change Profile</a>              
              <h6 class="widget-user-desc"><br>{{$data->email}}</h6>

            </div>
            <div class="widget-user-image">
                <img   class="rounded-circle" src="{{(!empty($data->profile_photo_path)) ? url('upload/admin_images/' . $data->profile_photo_path) : url('upload/admin_images/logo.png')}}" alt="User Avatar">
            </div>
           
          </div>
		<!-- /.content -->
            </div>
        </div>
		
  </div>
@endsection