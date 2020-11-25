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
                        <a href="addstu" class="sidebar__nav__link">
                            <i class="mdi mdi-fingerprint"></i>
                            <span class="sidebar__nav__text">ADD STUDENT</span>
                        </a>
                    </li>
                    <li>
                        <a href="stulist" class="sidebar__nav__link">
                            <i class="mdi mdi-credit-card"></i>
                            <span class="sidebar__nav__text">STUDENT LIST</span>
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