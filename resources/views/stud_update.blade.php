@extends ('admin_layout')
@section ('title')
Update-students
@endsection
@section ('content')

<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">UPDATE STUDENT</h2>
                    <form method="POST" action="{{route('update',$id->id)}}">
                          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <div class="row row-space">
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="name" value = "{{ $id->name }}">
                                     @foreach($errors->get('name') as $e)
                    
                               <small class="text-danger"> {{ $e  }}</small>

                                @endforeach
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">age</label>
                                    <input class="input--style-4" type="text" name="age" value = "{{ $id->age }}">
                                     @foreach($errors->get('age') as $e)
                    
                               <small class="text-danger"> {{ $e  }}</small>

                                @endforeach
                               </div>
                            </div>
                        </div>
                             
                           
                        <div class="row row-space">
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Address</label>
                                    <input class="input--style-4" type="text" name="address" value = "{{ $id->address }}">
                                     @foreach($errors->get('address') as $e)
                    
                               <small class="text-danger"> {{ $e  }}</small>

                                @endforeach
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">perfomance</label>
                                    <input class="input--style-4" type="text" name="total_perfomance" value = "{{ $id->total_perfomance }}">
                                     @foreach($errors->get('total_perfomance') as $e)
                    
                               <small class="text-danger"> {{ $e  }}</small>

                                @endforeach
                                </div>
                            </div>
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