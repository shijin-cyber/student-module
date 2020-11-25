@extends ('admin_layout')
@section ('content')

<!DOCTYPE html>
<html>
<head>

    <title></title>
    <style type="text/css">
        div.dataTables_length {
    padding-left: 2em;
    }
    div.dataTables_length,
    div.dataTables_filter {
        padding-top: 0.55em;
    }



    </style>
    <link rel="stylesheet"  href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
</head>
<body>
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
            @foreach($id as $id)
            <tr>
                <td>{{$id->id}}</td>
                <td>{{$id->name}}</td>
                <td>{{$id->date}}</td>
                <td>{{$id->hour1}}</td>
                <td>{{$id->hour2}}</td>
                <td>{{$id->hour3}}</td>
                <td>{{$id->hour4}}</td>
                <td>{{$id->hour5}}</td>
                <td>{{$id->hour6}}</td>
                <td>{{$id->hour7}}</td>
                <td>{{$id->hour8}}</td>
                 <td><a href = "{{route('edit_attendence',$id->id)}}">UPDATE</td>
                    <td>
                     <form action="{{route('delete_attendence',$id->id)}}" method="post" class="d-inline-block">
                        @csrf
                        <input type="submit" class="btn btn-danger" value="delete">
                    </form>
                </td>
            </tr>
            <!-- Modal form to edit a form -->
    <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_edit" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Title:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title_edit" autofocus>
                                <p class="errorTitle text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="content">Content:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="content_edit" cols="40" rows="5"></textarea>
                                <p class="errorContent text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary edit" data-dismiss="modal">
                            <span class='glyphicon glyphicon-check'></span> Edit
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
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



    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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


