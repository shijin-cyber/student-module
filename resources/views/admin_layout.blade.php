

<!DOCTYPE html>
<html lang="pt-BR">
    <head>

    <!--badic cboot-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--badic cboot-->


        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>

        <link
            rel="stylesheet"
            href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css"
        />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Roboto&display=swap"
        />
        <link rel="stylesheet" href="{{asset('assets/css/styles.css') }}" />
        <link rel="stylesheet" href="{{asset('assets/css/sidebar.css ') }}" />
    
        <!-- Admin_end_here-->
        <!-- Add_student-->

         <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('addcss/main.css')}}" rel="stylesheet" media="all">

    <!--student_list-->
    <!--===============================================================================================-->  
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
<!--===============================================================================================-->

    </head>
    <body>
        
        
      
        
        <aside class="sidebar " style="z-index: 5;">

            <nav>
                <ul class="sidebar__nav ">
                    <li>
                        <a href="{{url('admin')}}" class="sidebar__nav__link">
                            <i class= "fas fa-award" style="font-size:48px;color:red"></i>
                            <span class="sidebar__nav__text">ADMIN</span>
                        </a>
                    </li>


                    <li>
                        <a href="{{url('add_student')}}" class="sidebar__nav__link">
                            <i class="mdi mdi-fingerprint"></i>
                            <span class="sidebar__nav__text">ADD STUDENT</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('student_list')}}" class="sidebar__nav__link">
                            <i class="mdi mdi-credit-card"></i>
                            <span class="sidebar__nav__text">STUDENT LIST</span>
                        </a>
                    </li>

                     <li>
                        <a href="{{url('attendence_sheet')}}" class="sidebar__nav__link">
                            <i class="mdi mdi-credit-card"></i>
                            <span class="sidebar__nav__text">Attendence</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('attendence_list')}}" class="sidebar__nav__link">
                            <i class="mdi mdi-credit-card"></i>
                            <span class="sidebar__nav__text">Attendence List</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('documents')}}" class="sidebar__nav__link">
                            <i class="mdi mdi-credit-card"></i>
                            <span class="sidebar__nav__text">Documents</span>
                        </a>
                    </li>

                    

                   
                   
                    <li>
                        <a href="/logout" class="sidebar__nav__link">
                            <i class="mdi mdi-account-circle"></i>
                            <span class="sidebar__nav__text">Logout</span>
                        </a>
                    </li>
                   
                    
                </ul>
            </nav>
        </aside>

        @yield('content')






         </body>
</html>