<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"/>
    <!-- Dark MDB theme -->
    <link rel="stylesheet" href="css/mdb.dark.min.css" />
    <!-- Regular MDB theme -->
    <!-- <link rel="stylesheet" href="css/mdb.min.css" /> -->
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <img
                    src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png"
                    height="15"
                    alt=""
                    loading="lazy"
                />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Projects</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Avatar -->
            <a
                class="dropdown-toggle d-flex align-items-center hidden-arrow"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
            >
                <img
                    src="https://mdbootstrap.com/img/new/avatars/2.jpg"
                    class="rounded-circle"
                    height="25"
                    alt=""
                    loading="lazy"
                />
            </a>
            <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink"
            >
                <li>
                    <a class="dropdown-item" href="#">My profile</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Settings</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                </li>
            </ul>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<!-- Optional JavaScript; choose one of the two! -->
<div class="container">
    @yield('content')
</div>

<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
</body>
</html>
