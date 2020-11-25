@extends ('admin_layout')
@section ('content')
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Update Attendence</h2>
                    <form method="POST" action="{{route('update_attendence',$id->id)}}">
                        @csrf

                            <div class="col-8">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="name" value = "{{ $id->name }}">
                                     @foreach($errors->get('name') as $e)
                    
                               <small class="text-danger"> {{ $e  }}</small>

                                @endforeach
                                </div>
                            </div>
                        
                        <div class="row row-space">
                            <div class="col-8">
                                <div class="input-group">

                         <label for="birthday">Select Date</label>
                                     <input type="date" id="birthday" name="date" value="{{$id->date}}">
                                      @foreach($errors->get('date') as $e)
                    
                                <small class="text-danger"> {{ $e  }}</small>

                                       @endforeach
                                        <br><br>

                                </div>
                            </div>
                            
                        </div>

                                       <legend>Hour 1:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour1" id="hour1"  value="1" checked>
                   @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios1">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour1" id="hour1" value="0">
                         <br>
                          @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios2">
                         Absent
                   </label>
                   </div>


                         <legend>Hour 2:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour2" id="hour2"  value="1" checked>
                   @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios1">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour2" id="hour2" value="0">
                          @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios2">
                         Absent
                   </label>
                   </div>



                         <legend>Hour 3:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour3" id="hour3"  value="1" checked>
                   @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios1">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour3" id="hour3" value="0">
                         @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                         
                         

                        <label class="form-check-label" for="exampleRadios2">
                         Absent
                   </label>
                   </div>



                         <legend>Hour 4:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour4" id="hour4"  value="1" checked>
                  @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios1">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour4" id="hour4" value="0">
                         @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios2">
                         Absent
                   </label>
                   </div>


                         <legend>Hour 5:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour5" id="hour5"  value="1" checked>
                  @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios1">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour5" id="hour5" value="0">
                         @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios2">
                         Absent
                   </label>
                   </div>



                         <legend>Hour 6:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour6" id="hour6"  value="1" checked>
                  @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios1">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour6" id="hour6" value="0">
                         @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios2">
                         Absent
                   </label>
                   </div>


                         <legend>Hour 7:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour7" id="hour7"  value="1" checked>
                   @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios1">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour7" id="hour7" value="0">
                          @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios2">
                         Absent
                   </label>
                   </div>



                         <legend>Hour 8:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour8" id="hour8"  value="1" checked>
                   @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios1">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour8" id="hour8" value="0">
                          @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios2">
                         Absent
                   </label>
                   </div>

                             
                           
                       
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="addjs/global.js"></script>


@endsection