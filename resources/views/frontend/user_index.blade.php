@extends('frontend.user_master')
@section('user_content')



<div class="page-content">
    <div class="container-fluid">
      
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1 class="text-center text-success">Welcome <strong>{{Auth::user()->name}}</strong> to Mehran Undergraduate Admission Portal</h1>
                </div>

            

                <div class="col-md-8 offset-2">
                    <div class="card">
                        <div class="card-header">

                        </div>

                        <div class="card-body">

                            <center>
                                <img class="rounded-circle card-img-top" style="border-radius: 50%; width:30%; height:30%;" src="{{(!empty($userdata->profile_photo_path)) ? url('upload/user_images/' . $userdata->profile_photo_path) : url('upload/no_image.jpg')}}" alt="User Avatar" >

                            </center>
                            <form action="">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" value="{{Auth::user()->email}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">CNIC</label>
                                    <input type="text" name="email" value="{{Auth::user()->email}}" class="form-control">
                                </div>

                                <br>
                                <div class="form-group">
                                <button type="submit" class="btn btn-info form-control">Update Profile</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- END OF COL-MD-6  --}}
            </div>
            {{-- end of the row --}}
        </div>
      
    </div>
    
</div>

@endsection