@extends ('admin_layout')


<!DOCTYPE html>
<html>
<head>

    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="tabvendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="tabfonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="tabvendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="tabvendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="tabvendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="tabcss/util.css">
    <link rel="stylesheet" type="text/css" href="tabcss/main.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title></title>
</head>
<body>

</body>
@section('content')


<div class="table-responsive">


       
        <div class="container-table100 ">
            <div class="wrap-table100 ">
                <div class="table100 ver1 m-b-110 ">
                    <div class="table100-head ">
                        
                        <table >
                            <thead>

                                <tr class="row100 head col-sm-12  ">

                                    <th class="cell100 column1"> id</th>
                                    <th class="cell100 column2"> Student Name</th>
                                    <th class="cell100 column3"> Student Age</th>
                                    <th class="cell100 column4"> Student Address</th>
                                    <th class="cell100 column5"> perfomance</th>
                                    <th class="cell100 column6"> UPDATE</th>
                                    <th class="cell100 column7"> DELETE</th>
                                
                                    
                                </tr>

                            </thead>
                        </table>
                    </div>

                    <div class="table100-body js-pscroll  ">
                        <table>
                            <tbody>
                                @foreach ($student as $students)
                                <tr class="row100 body">
                                    <td class="cell100 column1">{{ $students->id }}</td>
                                    <td class="cell100 column2">{{ $students->name }}</td>
                                    <td class="cell100 column3">{{ $students->age }}</td>
                                    <td class="cell100 column4">{{ $students->address }}</td>
                                    <td class="cell100 column5">{{ $students->total_perfomance }}</td>
                                    <td class="cell100 column6"><a href = "{{route('edit',$students->id)}}">UPDATE</td>
                                        <td class="cell100 column7"><a href = 'delete/{{ $students->id }}'>DELETE</td>
                                    
                                    
                                </tr>
                                @endforeach

                                
                            </tbody>
                        </table>
                    </div>
                </div>
                


                @endsection
                
                

<!--===============================================================================================-->  
    <script src="tabvendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="tabvendor/bootstrap/js/popper.js"></script>
    <script src="tabvendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="tabvendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="tabvendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function(){
            var ps = new PerfectScrollbar(this);

            $(window).on('resize', function(){
                ps.update();
            })
        });
            
        
    </script>
<!--===============================================================================================-->
    <script src="tabjs/main.js"></script>
</body>
</html


