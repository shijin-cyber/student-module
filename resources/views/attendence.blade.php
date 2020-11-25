@extends ('admin_layout')
@section('content')

<!DOCTYPE html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet"  href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     


   <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>



  
    <title></title>
</head>
<body>


<!-- Modal -->
<!-- Button trigger modal -->


<!--ADD attendence Modal -->
<div class="modal fade" id="addattendence" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Attendence</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="addform">

      <div class="modal-body">
        @csrf
        
        
                                    Select Student: <select name="name"  class="label" style="padding-right: 200px;">

                                    @foreach($id as $id)
                                     <option value="select student" selected="selected"  class="input--style-4" ></option>
                             <option value="{{$id->name}}" selected="selected"  class="input--style-4" >{{ $id->name }}</option>
                                      @endforeach
                                       @foreach($errors->get('name') as $e)
                    
                            <small class="text-danger"> {{ $e  }}</small>

                                     @endforeach
                                   </select>
                                    <br><br>
        

                  <div class="row row-space">
                            <div class="col-8">
                                <div class="input-group">

                         <label for="birthday">Select Date</label>
                                     <input type="date"  name="date">
                                      @foreach($errors->get('date') as $e)
                    
                                <small class="text-danger"> {{ $e  }}</small>

                                       @endforeach
                                        <br><br>

                                </div>
                            </div>
                            
                        </div>

                         <legend>Hour 1:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour1"   value="1" checked>
                   @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios1">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour1"  value="0">
                          @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios2">
                         Absent
                   </label>
                   </div>

         <legend>Hour2 :</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour2"   value="1" checked>
                   @foreach($errors->get('hour2') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios1">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour2"  value="0">
                          @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios2">
                         Absent
                   </label>
                   </div>

                    <legend>Hour 3:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour3"   value="1" checked>
                   @foreach($errors->get('hour3') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios1">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour3"  value="0">
                          @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios2">
                         Absent
                   </label>
                   </div>

                    <legend>Hour 4:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour4"   value="1" checked>
                   @foreach($errors->get('hour4') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios1">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour4"  value="0">
                          @foreach($errors->get('hour4') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios2">
                         Absent
                   </label>
                   </div>


                    <legend>Hour 5:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour5"   value="1" checked>
                   @foreach($errors->get('hour5') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios1">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour5"  value="0">
                          @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios2">
                         Absent
                   </label>
                   </div>

                    <legend>Hour 6:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour6"   value="1" checked>
                   @foreach($errors->get('hour6') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios1">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour6"  value="0">
                          @foreach($errors->get('hour6') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios2">
                         Absent
                   </label>
                   </div>

                    <legend>Hour 7:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour7"   value="1" checked>
                   @foreach($errors->get('hour7') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios1">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour7"  value="0">
                          @foreach($errors->get('hour7') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios2">
                         Absent
                   </label>
                   </div>
                    <legend>Hour 8:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour8"  value="1" checked>
                   @foreach($errors->get('hour8') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios1">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour8"  value="0">
                          @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios2">
                         Absent
                   </label>
                   </div>

         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Attendencde</button>
      </div>
    </form>
    </div>
  </div>
</div>



<!--edit attendence Modal -->
<div class="modal fade" id="editattendence" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Attendence</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="editFormID">

      <div class="modal-body">
        @csrf
        {{method_field('post')}}
            

         <input type="hidden" name="id" id="id">
    
           <input type="text" name="name" id="name">
        

                  <div class="row row-space">
                            <div class="col-8">
                                <div class="input-group">

                         <label for="birthday">Select Date</label>
                                     <input type="date" id="date" name="date">
                                      @foreach($errors->get('date') as $e)
                    
                                <small class="text-danger"> {{ $e  }}</small>

                                       @endforeach
                                        <br><br>

                                </div>
                            </div>
                            
                        </div>

                         <legend>Hour 1:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour1"  value="1" checked>
                   @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios1">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour1"  value="0">
                          @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios2">
                         Absent
                   </label>
                   </div>

         <legend>Hour2 :</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour2"   value="1" checked>
                   @foreach($errors->get('hour2') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios3">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour2"  value="0">
                          @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios4">
                         Absent
                   </label>
                   </div>

                    <legend>Hour 3:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour3"   value="1" checked>
                   @foreach($errors->get('hour3') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios5">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour3"  value="0">
                          @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios6">
                         Absent
                   </label>
                   </div>

                    <legend>Hour 4:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour4"   value="1" checked>
                   @foreach($errors->get('hour4') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios7">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour4" value="0">
                          @foreach($errors->get('hour4') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios8">
                         Absent
                   </label>
                   </div>


                    <legend>Hour 5:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour5"   value="1" checked>
                   @foreach($errors->get('hour5') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios9">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour5" value="0">
                          @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios10">
                         Absent
                   </label>
                   </div>

                    <legend>Hour 6:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour6"   value="1" checked>
                   @foreach($errors->get('hour6') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios11">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour6"  value="0">
                          @foreach($errors->get('hour6') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios12">
                         Absent
                   </label>
                   </div>

                    <legend>Hour 7:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour7"   value="1" checked>
                   @foreach($errors->get('hour7') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios13">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour7"  value="0">
                          @foreach($errors->get('hour7') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios14">
                         Absent
                   </label>
                   </div>
                    <legend>Hour 8:</legend>
                         <div class="form-check">
                  <input class="form-check-input" type="radio" name="hour8"   value="1" checked>
                   @foreach($errors->get('hour8') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                     <label class="form-check-label" for="exampleRadios15">
                      Present
                       </label>
                       </div>
                        <div class="form-check">
                         <input class="form-check-input" type="radio" name="hour8"  value="0">
                          @foreach($errors->get('hour1') as $e)
                    
                                   <small class="text-danger"> {{ $e  }}</small>

                                    @endforeach
                        <label class="form-check-label" for="exampleRadios16">
                         Absent
                   </label>
                   </div>

         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit Attendence</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!--delete attendence Modal -->

<div class="modal fade" id="deleteme" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="deleteFormID">
      <div class="modal-body">
        {{csrf_field()}}
        {{method_field('delete') }}
        <input type="hidden" name="id" id="delete_id">
        <p> are you sure to delete!!</p>

        
      </div>
      <div class="modal-footer btn-danger">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Delete</button>
      </div>
    </form>
    </div>
  </div>
</div>







    
     
            <div class="container">
        
        <div class="jumbotron" >
            <h3 >Student Attendence</h3>
            

        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addattendence">
      Add Attendence
</button>
    </div>

     <div class="table-responsive">
    <div class="container">
       
        
    <table id="example" class="table-responsive" >
        <thead>
          
            <tr>
                <th>id</th>
                <th>name</th>
                <th>date</th>
                <th>hour1</th>
                <th>hour2</th>
                <th>hour3</th>
                 <th>hour4</th>
                  <th>hour5</th>
                   <th>hour6</th>
                    <th>hour7</th>
                     <th>hour8</th>
                     <th>Update</th>
                      <th>Delete</th>
            </tr>

        </thead>
        <tbody>
          
          @foreach ($at as $at)
            <tr>
                <td>{{$at->id}}</td>
                <td>{{$at->name}}</td>
                <td>{{$at->date}}</td>
                <td>{{$at->hour1}}</td>
                <td>{{$at->hour2}}</td>
                <td>{{$at->hour3}}</td>
                <td>{{$at->hour4}}</td>
                <td>{{$at->hour5}}</td>
                <td>{{$at->hour6}}</td>
                <td>{{$at->hour7}}</td>
                <td>{{$at->hour8}}</td>
                
                 <td>
                  <a href="#" class="btn btn-success editbtn">Edit</a>
                  </td>
                  <td>
                     <a href="#" class="btn btn-danger deletebtn">Delete</a>
                </td>
            </tr>
            @endforeach
            
            
          


           
            
            
        </tbody>
        <tfoot>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>date</th>
                <th>hour 1</th>
                <th>hour 2</th>
                <th>hour 3</th>
                <th>hour 4</th>
                <th>hour 5</th>
                <th>hour 6</th>
                <th>hour 7</th>
                <th>hour 8</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>
</div>


    


 
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
    $('#example').DataTable( {
        "dom": '<"top"iflp<"clear">>rt<"bottom"iflp<"clear">>'
    } );
} );
    </script>

     <!--add ajax -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#addform').on('submit',function(e){
                e.preventDefault();
                $.ajax({
                    type:"POST",
                    url: "/addattendence",
                    data : $('#addform').serialize(),
                success: function (response) {
                    console.log(response)
                       // $('#exampleModalLong').modal('hide')
                        alert("Data Saved");
                    },
                    error: function(error){
                        console.log(error)
                        alert("Data Not Saved");


                    }
                });
            });
        });




    </script>



     <!--edit ajax -->


    <script>
      $(document).ready(function(){
      $('.editbtn').on('click', function(){
        $('#editattendence').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function(){
          return $(this).text();

        }).get();
        console.log(data);

        $('#id').val(data[0]);
        $('#name').val(data[1]);
        $('#date').val(data[2]);
        $('#hour1').val(data[3]);
        $('#hour2').val(data[4]);
        $('#hour3').val(data[5]);
        $('#hour4').val(data[6]);
        $('#hour5').val(data[7]);
        $('#hour6').val(data[8]);
        $('#hour7').val(data[9]);
        $('#hour8').val(data[10]);
       


      });
      $('#editFormID').on('submit',function(e){
        e.preventDefault();

        var id = $('#id').val();

        $.ajax({
          type :"POST",
          url:"/editattendence/"+id,
          data: $('#editFormID').serialize(),
          success:function(response){
            console.log(response);
           // $('#editattendence').modal('hide');
            alert("Data Updated");

          },
          error:function(error){
            console.log(error);
             alert("Data NOT Updated"+id );
          }

        });
      });


      });
    </script>


    <!--delete ajax -->

      <!--delete ajax -->
      <script type="text/javascript">
      


        $('.deletebtn').on('click',function(){
          $('#deleteme').modal('show');
          $tr = $(this).closest('tr');
          var data = $tr.children("td").map(function(){
          return $(this).text();

        }).get();
        console.log(data);
        $('#delete_id').val(data[0]);
      });

        $('#deleteFormID').on('submit', function(e){
          e.preventDefault();

          var id = $('#delete_id').val();

          $.ajax({
            type :"DELETE",
           
            url : "/deleteattendence/"+id,
            data : $('#deleteFormID').serialize(),
             success :function(response){
              console.log(response);
             // $('#deleteme').modal('hide');
              alert("Data Deleted");

             },
             error : function(error){
              console.log(error);
              alert("data not deleted");
             }
          });
        });
      </script>



    
    


</body>
</html>
@endsection