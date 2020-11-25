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
    @yield ('content')



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