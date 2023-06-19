@extends('frontend.user_master')
@section('user_content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="page-content">
    <div class="container-fluid">

        <div>
            <div id="sectionChecks" class="alert alert-danger">
              <h4 class="bg-danger"><i class="icon fa fa-commenting-o"></i>Note: Pay fees before sending/uploading Bank Receipt.</h4>
              <h4>
                <i class="icon fa fa-exclamation-triangle"></i>
                The deadline of Bank Receipt submission: <big>
               <span class="blink">
                2023-06-02          </span>
              </big>
              [year-month-day]
              </h4>
              <h4>
                <i class="icon fa fa-exclamation-triangle"></i>
                Do not Use: <b class="bg-danger"> Fund Transfer Service</b> and <b class="bg-danger"> Non HBL</b> Payment will not be entertained.<br>
                </h4>
              <h4><i class="icon fa fa-commenting-o"></i>Use Only: <b class="bg-success"> -HBL Branch &nbsp;&nbsp;&nbsp;   -HBL Mobile App  &nbsp;&nbsp;&nbsp; -HBL Internet Banking   </b> </h4>  
          
              
            </div>
          </div>


          <div style="text-align:left;">
            <b class="bg-danger" style="color:rgb(238, 214, 214); padding-left:5px;">Do not use: HBL/other Fund Transfer Service and Non HBL Payment will not be entertained.<b>
          
            <!--    <a href="challan2phase.php"><button type="button" style="width:250px;" class="btn btn-primary btn-block btn-lg"><b>Print HiAST Bank Challan</b></button></a>-->
              
         <!--     <a href="challan2phase.php"><button type="button" style="width:250px;" class="btn btn-primary btn-block btn-lg"><b>Print New Bank Challan</b></button></a>  for second Phase Challan -->
              <br><br>
              <a href="{{route('chalan.api')}}"><button type="button"  class="btn btn-primary btn-circle btn-lg"><b>Print New Bank Challan</b></button></a> 
              
            </b></b></div>



            <b style="color:red; padding-left:5px;"><b>

                    
  

   
   
   
   
                <form action="UserBasicInfoHandler.php" method="post" enctype="multipart/form-data">
            
                <div class="row" style="margin-left : 0px; margin-right : 0px; margin-top:15px">
                  <div>
                  <!--Basic Information Box -->
                      <div class="box box-primary" style="">
                        <div class="box-header with-border">
                          <h3 class="box-title"><!-- <i id="basicInfoIcon" class="icon fa fa-commenting-o"></i><b> Instruction: </b>Paid Bank Receipt can be sent through courier or upload.</h3>-->
                        </h3></div>
                        <!-- /.box-header -->
                        <!-- form start -->
                      <div class="box-body">
                        <div class="col-md-12">
                          <div class="form-group">
                              
                          <!--    <div class="radio">
                                <label>
                                  <input type="radio" name="courierStatus" id="courierStatus" class="challanOptions" value="1">
                                  Send Paid Bank Receipt through courier to Director Admissions, Mehran UET Jamshoro.
                                </label>
                              </div> -->
                      <!--     <div class="radio">
                                <label>
                                  <input type="radio" name="courierStatus" checked id="uploadStatus" class="challanOptions" value="0" >
                                  Upload Paid Bank Receipt or Screen Shot of Online TransactionID
                                </label>
                              </div>   -->
                          </div>
                        </div>  
                      </div>
                    </div>
                  </div>
                </div>
            
              <button id="show-upload-challan" type="button" style="width:250px" class="btn btn-info btn-block btn-lg"><b>Add Bank Receipt Details</b></button>
              
                <!-- Main content -->
                <section class="content">
                <input type="hidden" value="7651" id="userID" name="userID">
            <input type="hidden" value="2023-06-02" name="expDate">
                <div class="row">
                  <input type="hidden" value="uploadChallan" id="uploadChallan" name="uploadChallan">
                  <div>
                  <!--Basic Information Box -->
                      <div id="challan-upload" class="box box-primary" style="display: none;">
                        <div class="box-header with-border">
                          <h3 class="box-title"><b>Basic Information: </b>Bank Challan</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                          <div class="box-body">
                          
                           <!-- <div class="col-md-4">
                                    <label>Branch Name *</label>
                                    <select class="form-control select2" name="brachName" id="brachName" style="width: 100%;" required>
                                        <option selected="selected">Select Branch Name</option>
                                                                  </select>
                            </div>-->
                             <div class="col-md-4">
                              <label for="date-of-birth">Branch Name *</label>
                              <input type="text" name="brachName" class="form-control" id="brachName" required="">
                            </div>
                            <div class="col-md-4">
                              <label for="date-of-birth">Payment Date *</label>
                              <input type="date" name="paidDate" class="form-control" id="paidDate" required="">
                              
                              
                            </div>
                           
                           
            
                           <div id="challanImageDiv" class="col-md-4">
                              <label for="imageUpload">Upload Challan Image *</label>
                             <input type="file" name="fileToUpload" id="fileToUpload2" accept="image/png, image/jpeg" onchange="return validatePhotoSize(this,'fileToUpload2')"> 
                            </div>
            
                           
                           
                           
            
                          </div>
                          
                      
                          <!-- /.box-body -->
                          <div class="box-footer">
                         <button id="challan-confirmation" name="submit" class="btn btn-primary pull-right" style="margin-left:10px">Submit</button> 
                            <!-- <p class="pull-right" style="margin-left:10px;">Acceptable image extensions: JPG, JPEG, PNG | Maximum image size: 150KB </p> -->
                          </div>
                       
                      </div>
                      <!-- /.box -->
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                  </div>
            
                  
                </section>
                </form>
              </b></b>
    </div>
</div>
@endsection