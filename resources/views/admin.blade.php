

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin-panel</title>

        <link
            rel="stylesheet"
            href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css"
        />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Roboto&display=swap"
        />
        <link rel="stylesheet" href="./assets/css/styles.css" />
        <link rel="stylesheet" href="./assets/css/sidebar.css" />
    </head>
    <body>
        
        <aside class="sidebar">

            <nav>
                <ul class="sidebar__nav">

                    <li>
                        <a href="{{url('admin')}}" class="sidebar__nav__link">
                            <i class= "fas fa-award" style="font-size:48px;color:red"></i>
                            <span class="sidebar__nav__text">ADMIN</span>
                        </a>
                    </li>
                    <li>
                        <a href="add_student" class="sidebar__nav__link">
                            <i class="mdi mdi-fingerprint"></i>
                            <span class="sidebar__nav__text">ADD STUDENT</span>
                        </a>
                    </li>
                    <li>
                        <a href="student_list" class="sidebar__nav__link">
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
        <main class="main">
            <section>
                <h2>ADMIN DASHBOARD</h2>
                <p>
                    
                </p>
                
            </section>
            
        </main>
    </body>
</html>
