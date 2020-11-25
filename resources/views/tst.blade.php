@extends ('admin_layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet"  href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">


     <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <title></title>
</head>
<body>





<!--=data upload========-->

<div class="row md-">
    <div class="card-body bg-primary">
      <form>
        @csrf

     <div class="form-row align-items-center" style="padding-left: 180px;">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Select student</label>
      
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="name">
        @foreach($id as $id)
        <option selected >Choose...</option>
        <option selected value="{{$id->name}}">{{$id->name}}</option>
          @endforeach
        
      </select>
       <label class="mr-sm-2" for="inlineFormCustomSelect">select Course</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="department">
        <option selected>Choose...</option>
        <option value="ece">ECE</option>
        <option value="eee">EEE</option>
        <option value="me">ME</option>
        <option value="cs">CS</option>
      </select>

       <label class="mr-sm-2" for="inlineFormCustomSelect">Select Batch</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect " name="batch">
        <option selected>Choose...</option>
        <option value="1st year">1st year</option>
        <option value="2nd year">2nd year</option>
        <option value="3rd year">3rd year</option>
         <option value="4th">4th year</option>
      </select>
    


    </div>
  </div>
  


</form>


<br>
<br>

<!--=pdf upload========-->
<div class="container " style="padding-left: 180px;">
    <div class="container">

      <form action="/imageUpload" enctype="multipart/form-data" method="post">
                        @Csrf
                        <div class="row">
                        <div class="form-group">
                            
                            <input type="file" name="image[]" class="form-control-image" multiple>
                        </div>
                        <div class="form-group">
                       
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>
                </div>
                        
                    </form>
    </div>
</div>
</div>
</div>




</div>
</div>
<br>
<br>
<br>
<br>




     <div class="table-responsive">
    <div class="container">
       
        
    <table id="example" class="table-responsive" >
        <thead>
          
            <tr>
                <th>id</th>
                <th>name</th>
                
                     <th>Update</th>
                      <th>Delete</th>
            </tr>

        </thead>
        <tbody>
          
          @foreach ($images as $images)
            <tr>
                <td> <a href="{{$images->id}}"> {{$images->id}}</a></td>
                <td><a href="{{$images->image}}"> engineering maths full module</a></td>
                
                
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
                
                
            </tr>
        </tfoot>
    </table>
</div>
</div>
</div>


<!-- Modal delete -->
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

<!-- Modal edit -->
<div class="modal fade" id="editme" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Document</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="editFormID">
      <div class="modal-body">
         @csrf
         {{method_field('post')}}
         <input type="hidden" name="id" id="id">
        <p>Edit file</p>
        <div class="container">
    <div class="container">

      
                        
                        <div class="form-group">
                            
                            <input type="file" name="image[]" id="name" class="form-control-image" multiple>
                        </div>
                        
                       
                      
  
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

  </form>
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
           
            url : "/deletedata/"+id,
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
        $('#image').val(data[1]);
        
        
       



      });
      $('#editFormID').on('submit',function(e){
        e.preventDefault();

        var id = $('#id').val();

        $.ajax({
          type :"POST",

          url:"/editdata/"+id,
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
</body>
</html>


@endsection