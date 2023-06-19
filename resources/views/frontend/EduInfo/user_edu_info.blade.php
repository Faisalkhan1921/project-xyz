@extends('frontend.user_master')
@section('user_content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="page-content">
    <div class="container-fluid">
{{-- ================ START OF MATRIC ================= --}}
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center text-light bg-success">Matric Result</h3>
                        </div>

                        <div class="card-body">
                            <form action="{{route('store.matric.records')}}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <h5>Select Board<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="board_id" id="select" class="form-control">
                                                
                                                <option value="" selected="" disabled="">Select Board</option>
                                                @foreach($clgdata as $data)
                                                <option value="{{$data->id}}">{{$data->board_name}}</option>
                                                @endforeach
                                                
                                            </select>
                                            @error ('board_id')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>
                                    </div>
    

                                    <div class="form-group col-md-12">
                                        <label for="">Matriculation or equivalent score obtained*</label>
                                        <input type="number" class="form-control" id="matric_score_obtained" name="matric_score_obtained" value="" placeholder="Enter Marks obtained" required="">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="">SSC (Matriculation) Seat No**</label>
                                        <input type="number" class="form-control" id="seatno" name="matric_seat_no" value="" placeholder="Enter SSC or Matriculation Seat No" required="">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <h5>Select Passing Year<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="passyear_id" id="select" class="form-control">
                                                
                                                <option value="" selected="" disabled="">Select Passing</option>
                                                @foreach($passyear as $data)
                                                <option value="{{$data->id}}">{{$data->passyear}}</option>
                                                @endforeach
                                                
                                            </select>
                                            @error ('passyear_id')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-success form-control">Add SSC Details</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                
    {{-- START OF ENTER  --}}
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center text-light bg-success">HSC Result</h3>
            </div>

            <div class="card-body">
                <form action="{{route('store.hsc.records')}}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <h5>Select Board<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="board_id" id="select" class="form-control">
                                    
                                    <option value="" selected="" disabled="">Select Board</option>
                                    @foreach($clgdata as $data)
                                    <option value="{{$data->id}}">{{$data->board_name}}</option>
                                    @endforeach
                                    
                                </select>
                                @error ('board_id')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                        </div>


                        <div class="form-group col-md-12">
                            <label for="">Intermedia or equivalent score obtained*</label>
                            <input  type="number" class="form-control" id="hsc_score_obtained" name="hsc_score_obtained"  placeholder="Enter Marks obtained" required="">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">HSC (Intermedia) Seat No**</label>
                            <input type="number" class="form-control" id="seatno" name="hsc_seat_no" value="" placeholder="Enter HSC or Intermediate Seat No" required="">
                        </div>

                        <div class="form-group col-md-12">
                            <h5>Select Passing Year<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="passyear_id" id="select" class="form-control">
                                    
                                    <option value="" selected="" disabled="">Select Passing</option>
                                    @foreach($passyear as $data)
                                    <option value="{{$data->id}}">{{$data->passyear}}</option>
                                    @endforeach
                                    
                                </select>
                                @error ('passyear_id')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-success form-control">Add HSC Details</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

     
       
    {{-- END OF ENTER  --}}
            </div>
        </div>
    {{-- ============== END OF MATRIC================   --}}

    </div>
</div>

@endsection