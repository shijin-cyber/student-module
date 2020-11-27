@extends ('user_layout')
@section ('content')


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet"  href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">


     <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <title></title>
</head>
<body>
	<div class="jumbotron text-center">
		<h3 >Study Materials</h3>
		
	</div>
	<div class="container">


	 <div class="table-responsive">
    <div class="container">
       
        
    <table id="example"  >
        <thead>
          
            <tr>
                <th>id</th>
<<<<<<< HEAD
                <th>name</th>
                
                     <th>Show</th>
                     <th>Download</th>
=======
                <th>Notes</th>
                <th>Show</th>
                 <th>Download</th>
>>>>>>> feature
                      
            </tr>

        </thead>
        @foreach ($images as $images)
        <tbody>
          <tr>
                <td> <a href="{{$images->id}}"> {{$images->id}}</a></td>
                <td><a href="{{$images->image}}"> {{$images->documenttitle}}</a></td>
                <td>
                  <a href="{{$images->image}}" class="btn btn-success showbtn">Show</a>
                  </td>
                  <td>
                  <a href="{{$images->image}}" class="btn btn-danger dwnbtn" download="">Download</a>
                  </td>
                  
            </tr>
          </tbody>
          @endforeach
        <tfoot>
            <tr>
                <th>id</th>
                <th>Notes</th>
                <th>Show</th>
                <th>Download</th>
<<<<<<< HEAD
=======

>>>>>>> feature
              </tr>
        </tfoot>
    </table>
</div>
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

</body>
</html>
@endsection

