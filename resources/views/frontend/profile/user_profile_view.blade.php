@extends('frontend.user_master')
@section('user_content')

<div class="page-content">
    <div class="container-fluid">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="bg-danger text-light">
                            <i class="icon fa fa-exclamation-triangle bg-danger"></i>
                            The deadline of Profile Photograph submission: <big>
                           <span class="blink">
                            2023-06-02          </span>
                          </big>
                          [year-month-day]
                          </h4>
                    </div>


                    <div class="card-body">
                        <form method="POST" action="{{route('upload.stu.img')}}" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Upload Student Image</label>
                                <div class="col-sm-10">
                                    <input  name="profile_student" class="form-control" type="file"  id="image">
                                </div>
                          
                            </div>
    
                            <div class="form-group">

                                <img style="width: 150px; height:100px;" class="ml-5 rounded-avatar-lg" src="{{(!empty($data->profile_student)) ? url( $data->profile_student) : url('upload/sample_images/pic1.png')}}" alt="User Avatar" id="showImage">
{{-- 
                                <img id="showImage" style="width: 150px; height:100px;" class="ml-5 rounded-avatar-lg" alt="200x200" src="{{asset('upload/sample_images/pic1.png')}}" data-holder-rendered="true">  --}}
                            </div>

                            <div class="form-group mt-2">
                                <input type="submit" value="Upload Image" class="form-control btn btn-success">
                            </div>
                        </form>
                    </div>



                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="alert">Make sure You follow the following Instruction through visual display of images required to upload</h1>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="{{asset('upload/sample_images/pic1.png')}}"  alt="">
                            </div>


                            <div class="col-md-2">
                                <img src="{{asset('upload/sample_images/pic2.png')}}"  alt="">
                            </div>

                            <div class="col-md-2">
                                <img src="{{asset('upload/sample_images/pic3.png')}}"  alt="">
                            </div>

                            <div class="col-md-2">
                                <img src="{{asset('upload/sample_images/pic4.png')}}"  alt="">
                            </div>

                            <div class="col-md-2">
                                <img src="{{asset('upload/sample_images/pic5.png')}}"  alt="">
                            </div>

                            <div class="col-md-2">
                                <img src="{{asset('upload/sample_images/pic6.png')}}"  alt="">
                            </div>

                            <div class="col-md-2">
                                <img src="{{asset('upload/sample_images/pic7.png')}}"  alt="">
                            </div>

                            <div class="col-md-2">
                                <img src="{{asset('upload/sample_images/pic8.png')}}"  alt="">
                            </div>

                            <div class="col-md-2">
                                <img src="{{asset('upload/sample_images/pic9.png')}}"  alt="">
                            </div>

                            <div class="col-md-2">
                                <img src="{{asset('upload/sample_images/pic10.png')}}"  alt="">
                            </div>

                            <div class="col-md-2">
                                <img src="{{asset('upload/sample_images/pic11.png')}}"  alt="">
                            </div>

                            <div class="col-md-2">
                                <img src="{{asset('upload/sample_images/pic12.png')}}"  alt="">
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
</div>

<script src="{{asset('backend/jquery/query.min.js')}}"></script>

<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>


@endsection