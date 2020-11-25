@extends ('admin_layout')
@section('content')

<!DOCTYPE html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet"  href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     


    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>



  
    <title></title>
</head>
<body>


<!-- Modal -->
<!-- Button trigger modal -->


<!--ADD studen Modal -->

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="addme" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student form </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="addform">
      <div class="modal-body">
        @csrf
    
  <div class="form-group">
    <label>Student Name</label>
    <input type="text" class="form-control"  placeholder="Student Name" name="name">
    
  </div>

  <div class="form-group">
    <label>Student AGE</label>
    <input type="text" class="form-control"  placeholder="Student AGE" name="age">
    
  </div>

  <div class="form-group">
    <label>Student Address</label>
    <input type="text" class="form-control"  placeholder="Student Address" name="address">
    
  </div>

  <div class="form-group">
    <label>Student Perfomance</label>
    <input type="text" class="form-control"  placeholder="Student Perfomance" name="total_perfomance">
    
  </div>
  
 
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Student</button>
      </div>
    </form>
    </div>
  </div>
</div>




<!--editstuden Modal -->

<!-- Button trigger modal -->

<!-- Modal -->

<div class="modal fade" id="editme" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Student form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="editFormID">

      <div class="modal-body">
        @csrf
         {{method_field('post')}}

         <input type="hidden" name="id" id="id">
    
  <div class="form-group">
    <label>Student Name</label>
    <input type="text" class="form-control"  placeholder="Student Name" name="name" id="name">
    
  </div>

  <div class="form-group">
    <label>Student AGE</label>
    <input type="text" class="form-control"  placeholder="Student AGE" name="age" id="age">
    
  </div>

  <div class="form-group">
    <label>Student Address</label>
    <input type="text" class="form-control"  placeholder="Student Address" name="address" id="address">
    
  </div>

  <div class="form-group">
    <label>Student Perfomance</label>
    <input type="text" class="form-control"  placeholder="Student Perfomance" id="total_perfomance" name="total_perfomance">
    
  </div>
  
 
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit Student</button>
      </div>
    </form>
    </div>
  </div>
</div>








    
     
            <div class="container">
        
        <div class="jumbotron" >
            <h3 >Student List</h3>
            

        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addme">
      Add Student
</button>
    </div>



    <!-- deletetrigger modal -->


  <!-- Modal -->
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

     <div class="table-responsive">
    <div class="container">
       
        
    <table id="example" class="table-responsive" >
        <thead>
          
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>AGE</th>
                <th>ADDRESS</th>
                <th>PERFOMANCE</th>
                
                     <th>Update</th>
                      <th>Delete</th>
            </tr>

        </thead>
        <tbody>
          
          @foreach($id as $id)
            <tr>
                <td>{{$id->id}}</td>
                <td>{{$id->name}}</td>
                <td>{{$id->age}}</td>
                <td>{{$id->address}}</td>
                <td>{{$id->total_perfomance}}</td>
               
                 <td>
                  <a href="#" class="btn btn-success editbtn">Edit</a>
                  </td>
                   <td>
                     <a href="#" id="deleteFormID" class="btn btn-danger deletebtn">Delete</a>
                </td>
            </tr>
            @endforeach
            
            
            
          


           
            
            
        </tbody>
        <tfoot>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>age</th>
                <th>Address</th>
                <th>Perfomance</th>
                
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
                    url: "/addmee",
                    data : $('#addform').serialize(),
                success: function (response) {
                    console.log(response)
                       $('#exampleModalLong').modal('hide')
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

      <!--edit ajax -->


    <script>
     $(document).ready(function(){
      $('.editbtn').on('click', function(){
        $('#editme').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function(){
          return $(this).text();

        }).get();
        console.log(data);

        $('#id').val(data[0]);
        $('#name').val(data[1]);
        $('#age').val(data[2]);
        $('#address').val(data[3]);
        $('#total_perfomance').val(data[4]);
        
       



      });
      $('#editFormID').on('submit',function(e){
        e.preventDefault();

        var id = $('#id').val();

        $.ajax({
          type :"POST",

          url:"/editmee/"+id,
          data: $('#editFormID').serialize(),
          success:function(response){
            console.log(response);
            //$('#editme').modal('hide');
            alert("Data Updated");

          },
          error:function(error){
            console.log(error);
             
             alert("Data NOT Updated" +id);
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
           
            url : "/delete/"+id,
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