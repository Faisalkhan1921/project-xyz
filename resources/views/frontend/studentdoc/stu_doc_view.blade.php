@extends('frontend.user_master')
@section('user_content')


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="page-content">
    <div class="container-fluid">

        <style>

.blink{
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}


        </style>

        <div class="row">
         
            <div class="col-md-12">
                <div class="alert alert-warning alert-dismissible fade show bg-danger text-light" role="alert" style="font-size:30px;">
                    <strong>The Deadline of Document Submission! </strong> <big><span class="blink">2023-06-02</span></big> [year-month-day]
                    Note: Upload Your documents before deadline.
                    <button type="button" class="close text-light bg-dark" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
            </div>

            <div class="col-md-12 bg-info">
                <h3 class="marquee2">Guidelines for Upload Documents:</h3>

                <p><big><strong>1- </strong></big>Acceptable image extensions: <big><strong>JPG, JPEG, PNG | Maximum image size: 150KB</strong></big></p>

                <p><big><strong>2- </strong></big>Documents names should be renamed before uploading. <big><strong>like SSC, HSC, Domicile,PRC, CNIC eg:(SSC.JPG)</strong></big></p>

                <p><big><strong>3- </strong></big>If you have uploaded the wrong document, <big><strong>You can replace document by upload document again</strong></big>.</p>

            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mt-3">
               <div class="card">
                <div class="card-header">
                    <h3>Upload Candidate Domicile</h3>
                </div>

                <div class="card-body">
                       <form method="POST" action="{{route('add.stu.domicile.img')}}" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <label for="">Upload Candidate Original Domicile</label>
                        <input type="file" name="domicile_img" id="image" class="form-control">
                    </div>

                    <div class="form-group">

                        <img style="width: 150px; height:100px;" class="ml-5 rounded-avatar-lg" src="{{(!empty($data->domicile_img)) ? url( $data->domicile_img) : url('upload/sample_images/pic1.png')}}" alt="User Avatar" id="showImage">
{{-- 
                        <img id="showImage" style="width: 150px; height:100px;" class="ml-5 rounded-avatar-lg" alt="200x200" src="{{asset('upload/sample_images/pic1.png')}}" data-holder-rendered="true">  --}}
                    </div>

                    <div class="form-group mt-3">
                        <input type="submit" value="Upload Domicile" class="btn-success btn btn-lg">
                    </div>
                </form>

                </div>
               </div>
            </div>
            {{-- end of col-md-4  --}}

            <div class="col-md-4 mt-3">
                <div class="card">
                 <div class="card-header">
                     <h4>Upload Candidate PRC</h4>
                 </div>
 
                 <div class="card-body">
                    <form method="POST" action="{{route('add.stu.prc.img')}}" enctype="multipart/form-data">
                        @csrf
                     <div class="form-group">
                         <label for="">Upload Original Candidate PRC</label>
                         <input type="file" name="prc_img" id="image2" class="form-control">
                     </div>
 
                     <div class="form-group">

                        <img style="width: 150px; height:100px;" class="ml-5 rounded-avatar-lg" src="{{(!empty($dataprc->prc_img)) ? url( $dataprc->prc_img) : url('upload/sample_images/pic1.png')}}" alt="User Avatar" id="showImage2">
{{-- 
                        <img id="showImage" style="width: 150px; height:100px;" class="ml-5 rounded-avatar-lg" alt="200x200" src="{{asset('upload/sample_images/pic1.png')}}" data-holder-rendered="true">  --}}
                    </div>


                     <div class="form-group mt-3">
                         <input type="submit" value="Upload PRC" class="btn-success btn btn-lg">
                     </div>
                 </form>
                 </div>
                </div>
             </div>
{{-- end of col-md-4  --}}


<div class="col-md-4 mt-3">
    <div class="card">
     <div class="card-header">
         <h4>Upload Candidate CNIC/B-Form</h4>
     </div>

     <div class="card-body">
        <form method="POST" action="{{route('add.stu.cnic.img')}}" enctype="multipart/form-data">
            @csrf
         <div class="form-group">
             <label for="">Upload Original Candidate CNIC or B-Form</label>
             <input type="file" name="cnic_img" id="image3" class="form-control">
         </div>

         <div class="form-group">

            <img style="width: 150px; height:100px;" class="ml-5 rounded-avatar-lg" src="{{(!empty($datacnic->cnic_img)) ? url( $datacnic->cnic_img) : url('upload/sample_images/pic1.png')}}" alt="User Avatar" id="showImage3">
{{-- 
            <img id="showImage" style="width: 150px; height:100px;" class="ml-5 rounded-avatar-lg" alt="200x200" src="{{asset('upload/sample_images/pic1.png')}}" data-holder-rendered="true">  --}}
        </div>


         <div class="form-group mt-3">
             <input type="submit" value="Upload CNIC/B-Form" class="btn-success btn btn-lg">
         </div>
     </form>
     </div>
    </div>
 </div>
 {{-- end of col-md-4  --}}

 <div class="col-md-4 mt-3">
    <div class="card">
     <div class="card-header">
         <h4>SSC-II (Matriculation) Marksheet</h4>
     </div>

     <div class="card-body">
        <form method="POST" action="{{route('add.stu.ssc.img')}}" enctype="multipart/form-data">
            @csrf
         <div class="form-group">
             <label for="">Upload Original Marksheet</label>
             <input type="file" name="ssc_img" id="image4" class="form-control">
         </div>

         <div class="form-group">

            <img style="width: 150px; height:100px;" class="ml-5 rounded-avatar-lg" src="{{(!empty($datassc->ssc_img)) ? url( $datassc->ssc_img) : url('upload/sample_images/pic1.png')}}" alt="User Avatar" id="showImage4">
{{-- 
            <img id="showImage" style="width: 150px; height:100px;" class="ml-5 rounded-avatar-lg" alt="200x200" src="{{asset('upload/sample_images/pic1.png')}}" data-holder-rendered="true">  --}}
        </div>


         <div class="form-group mt-3">
             <input type="submit" value="Upload SSC Marksheet" class="btn-success btn btn-lg">
         </div>
     </form>
     </div>
    </div>
 </div>
 {{-- end of col-md-4  --}}

 <div class="col-md-4 mt-3">
    <div class="card">
     <div class="card-header">
         <h4>HSC-I Marksheet</h4>
     </div>

     <div class="card-body">
        <form method="POST" action="{{route('add.stu.hsc.img')}}" enctype="multipart/form-data">
            @csrf
         <div class="form-group">
             <label for="">Upload HSC-I Marksheet</label>
             <input type="file" name="hsc_img" id="image5" class="form-control">
         </div>

         <div class="form-group">

            <img style="width: 150px; height:100px;" class="ml-5 rounded-avatar-lg" src="{{(!empty($datahsc->hsc_img)) ? url( $datahsc->hsc_img) : url('upload/sample_images/pic1.png')}}" alt="User Avatar" id="showImage5">
{{-- 
            <img id="showImage" style="width: 150px; height:100px;" class="ml-5 rounded-avatar-lg" alt="200x200" src="{{asset('upload/sample_images/pic1.png')}}" data-holder-rendered="true">  --}}
        </div>


         <div class="form-group mt-3">
             <input type="submit" value="Upload HSC Admit-Slip/Marksheet" class="btn-success btn btn-lg">
         </div>
     </form>
     </div>
    </div>
 </div>
 {{-- end of col-md-4  --}}

 
        </div>
{{-- end of row  --}}


        <div class="row mt-3 mb-4">
            <h2 class="mt-3  mb-5 bg-dark text-light">FAQS RELATED TO UPLOAD DOCUMENTS:</h2>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <big><b>1. Do I have to use the Document & File Upload form to submit my documents at Admission Office, MUET?</b></big> 
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">A. No you dont need to submit any document or form at Admission Office. Admission form will be submitted only via online on the Admission portal. </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                     <big><b>2. Having trouble viewing the Document & File Upload form?</b></big> 
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">A. The Document & File Upload offers students the convenience of safely and securely uploading documents to our office for review & processing. if you don’t see the form View Admission Form to confirm your uploaded documents and other information.</div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                     <big><b>3. What should I do if my document is larger than the maximum size limit in Dynamic Forms (150KB)?</b></big> 
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">A. The maximum Scanned Document Image size accepted in Dynamic Form is 150KB , files larger will need to be reduce the file size into smaller files for upload.</div>
                  </div>
                </div>
                 
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingfour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                       <big><b>4. While uploading document, I received an alert message "Document name should be renamed before uploading"?</b></big> 
                      </button>
                    </h2>
                    <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">A. It means, you should renamed your scanned document file according to document title.</div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header " id="flush-headingfive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                       <big ><b>5. What if I accidentally submitted the wrong document?</b></big> 
                      </button>
                    </h2>
                    <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">A. If you have uploaded the wrong document, You can replace document by upload document again.</div>
                    </div>
                  </div>

              </div>
        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
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

{{-- for prc script  --}}
<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image2').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage2').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

{{-- cnic candidate  --}}
<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image3').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage3').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

{{-- ssc marksheet  --}}

<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image4').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage4').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>


{{-- hsc marksheet upload  --}}
<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image5').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage5').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection