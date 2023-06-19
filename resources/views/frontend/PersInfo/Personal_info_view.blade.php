@extends('frontend.user_master')
@section('user_content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<div class="page-content">
    <div class="container-fluid">
      
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-success">
                            <h3 class="text-center text-light">Student Personal Information</h3>
                        </div>

                        <div class="card-body">
                            <form action="{{route('student.store.persinfo')}}" method="POST">
                              @csrf
                                <div class="form-row">
                                  <div class="form-group col-md-4">
                                    <label >Name</label>
                                    <input type="text" class="form-control" name="sname" >

                                  </div>

                                  <div class="form-group col-md-4">
                                    <label for="inputPassword4">SurName</label>
                                    <input type="text" class="form-control" name="s_surname" >
                                  </div>
                             

                                <div class="form-group col-md-4">
                                    <label >CNIC</label>
                                    <input type="number" class="form-control" name="s_cnic" maxlength="16" >
                                  </div>

                                  <div class="form-group col-md-4">
                                    <label >Father Name</label>
                                    <input type="text" class="form-control" name="s_fname" maxlength="16" >
                                  </div>
                                  
                                  <div class="form-group col-md-4">
                                    <label >Mother Name</label>
                                    <input type="text" class="form-control" name="s_mname" maxlength="16" >
                                  </div>

                                  <div class="form-group col-md-4">
                                    <label >Next of Kin's Name</label>
                                    <input type="text" class="form-control" name="s_kname" maxlength="16" >
                                  </div>

                                  <div class="form-group col-md-4">
                                    <label >Guardian Name</label>
                                    <input type="text" class="form-control" name="s_gname" maxlength="16" >
                                  </div>
                                  
                                  <div class="form-group col-md-4">
                                    <label >Guardian CNIC Name</label>
                                    <input type="text" class="form-control" name="s_gnic" maxlength="16" >
                                  </div>

                                  <div class="form-group col-md-4">
                                    <label >Father/Guardian Mobile no Name</label>
                                    <input type="text" class="form-control" name="s_fphone" maxlength="16" >
                                  </div>

                                  <div class="form-group col-md-4">
                                    <label >Mobile No</label>
                                    <input type="number" class="form-control" name="s_phone" maxlength="11" >
                                  </div>
                                  
                                  <div class="form-group col-md-4">
                                    <label for="date-of-birth">Date of birth*</label>
                                    <input type="date" class="form-control" name="s_dob" id="dob"  required="" >
                                  </div>

                                  <div class="form-group col-md-4">
                                    <label >Kin's Mobile no Name</label>
                                    <input type="number" class="form-control" name="s_kphone" maxlength="16" >
                                  </div>


                                  <div class="form-group col-md-4">
                                    <h5>Select District<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="dist_id" id="select" class="form-control">
                                            
                                            <option value="" selected="" disabled="">Select Disrict</option>
                                            @foreach($dist as $data)
                                            <option value="{{$data->id}}">{{$data->Dist_name}}</option>
                                            @endforeach
                                            
                                        </select>
                                        @error ('category_id')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    </div>
                                </div>


                                  <div class="form-group col-md-4">
                                    <label >Religion</label>
                                    <select class="form-control select2" name="s_religion" id="religion" style="width: 100%;">
                                          <option selected="selected">Select Religion</option>
                                          <option selected="selected">
                                             Islam</option>
                                             <option>Islam </option>
                                         <option>Christianity </option>
                                         <option>Sikhism </option>
                                         <option>Hinduism </option>
                                         <option>Parsis </option>
                                         <option>Others </option>
                        </select>
                                  </div>


                                <div class="form-group col-md-4">
                                    <label for="address">Address*</label>
                                    <input type="text" class="form-control" name="s_address" id="address"  placeholder="Enter your address" required="">
                  
                                </div>


                                <div class="form-group col-md-4">
                                    <label for="k-Name">Domicile PRC *</label><br>
                
                                    <input type="radio" name="s_prc" class="minimal" id="s_prc" value="Rural" checked=""> 
                                    <label>Rural</label> <br>
                                    <input type="radio" name="s_prc" id="s_prc" value="Urban" class="minimal">
                                  <label>Urban </label>
                             
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="gender">Gender*</label><br>
                                    <input type="radio" name="s_gender" id="s_gender" value="Male" class="minimal" checked="">
                                  <label> Male </label> <br>                  
                                    <input type="radio" name="s_gender" id="s_gender" value="Female" class="minimal">
                                  <label>Female </label>
                                </div>

                                <div class="form-group col-md-4">
                                          
                   <label for="">Are you Hafiz-e-Quran?</label><br>
                   <input type="radio" name="s_hafiz" id="s_hafiz" value="1" class="minimal">
                 <label> Yes </label> <br>        
                   <input type="radio" name="s_hafiz" id="s_hafiz" value="0" class="minimal" checked="">
                 <label>No</label>
         </div>

                                <div class="form-group col-md-4">
                                  <h5>Select Sports<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="sports_id" id="select" class="form-control">
                                            
                                            <option value="" selected="" disabled="">Select Sports</option>
                                            @foreach($sports as $data)
                                            <option value="{{$data->id}}">{{$data->sports_name}}</option>
                                            @endforeach
                                            
                                        </select>
                                        @error ('sports_id')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    </div>
                                    
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="Domicile-district">Select Sports Achievement: </label>
				        
                                    <select class="form-control select2" name="sportsachieved" id="sportsachieved" style="width: 100%;">
                                          <option selected="selected"> Select Sports Achievement </option>
                                              <option selected="selected"> None  </option>                                   
                                              <option>  Gold</option>
                                              <option>  Silver </option>
                                              <option>  Bronze </option>
                                              <option>  None</option>    
                                    </select>
                           
                                </div>


                                <div class="form-group col-md-4">
                                    <label for="Domicile-district">Select Games played at which Level: </label>
				        
                                    <select class="form-control select2" name="sportslevel" id="sportslevel" style="width: 100%;">
                                          <option selected="selected"> Select Game Level </option>
                                                                        <option selected="selected"> Club  </option>                                   
                                              <option>  Club</option>
                                              <option>  Board </option>
                                              <option>  Province </option>
                                              <option> National </option>
                                              <option>  None</option>    
                                    </select>
                        
                                </div>


                                <div class="form-group col-md-4">
                                    <label for="k-Name">Have you ever been a current or former student of this university? (If YES, Enter your Roll Number) *</label>
                                    <input type="text" class="form-control" name="alreadyadmitted" id="alreadyadmitted" value="NO" placeholder="Enter Roll Number" required="">
                                </div>

                                
                                <div class="form-group col-md-4 mt-md-4">
                                    <label for="k-Name">Any Type of Physical Disability? <br> (If YES, Enter your Physical Activity ) *</label>
                                    <input type="text" class="form-control" name="disability" id="disability" value="No" placeholder="Enter Phsyical Disability" required="">
                                </div>

                                
                                <div class="form-group col-md-4 mt-md-5">
                                  <h5>Select BloodGroup<span class="text-danger">*</span></h5>
                                  <div class="controls">
                                      <select name="blood_id" id="select" class="form-control">
                                          
                                          <option value="" selected="" disabled="">Select BloodGroup</option>
                                          @foreach($blood as $data)
                                          <option value="{{$data->id}}">{{$data->blood_name}}</option>
                                          @endforeach
                                          
                                      </select>
                                      @error ('category_id')
                                      <span class="text-danger">{{$message}}</span>
                                  @enderror
                                  </div>
                                </div>

                                  </div>

                             
                                  <div class="col-md-12">
                                <button type="submit" class="btn btn-success form-control">Add Basic Info</button>

                                  </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- end of the row --}}
        </div>
      
    </div>
    
</div>

@endsection