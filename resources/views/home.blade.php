@extends('user_layout')

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
<div style="padding-left: 200px;">
    <h4>PROFILE</h4>
    
</div>
<br>
<br>

<div class="table-responsive">
    <div class="container">
       
        
    <table id="example"  >
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
                    
            </tr>

        </thead>
        <tbody>
          
          @foreach ($data as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->hour1}}</td>
                <td>{{$data->hour2}}</td>
                <td>{{$data->hour3}}</td>
                <td>{{$data->hour4}}</td>
                <td>{{$data->hour5}}</td>
                <td>{{$data->hour6}}</td>
                <td>{{$data->hour7}}</td>
                <td>{{$data->hour8}}</td>
                
                
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
