
    <script src="https://kit.fontawesome.com/3a80495aaf.js" crossorigin="anonymous"></script>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa-solid fa-cow me-2"></i>SISFO SAPI</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <i class="fa-solid fa-user display-5"></i>
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?= $_SESSION['username'] ;?></h6>
                        <span><?= $_SESSION['level'] ;?></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="page.php?peternak-daftar-sapi&id=<?= $_SESSION['id_user'] ;?>" class="nav-item nav-link"><i class="fa-solid fa-list me-2"></i></i>Daftar Sapi</a>
                    <a href="page.php?peternak-daftar-jenis&id=<?= $_SESSION['id_user'] ;?>" class="nav-item nav-link"><i class="fa-solid fa-cow me-2"></i>Daftar Jenis Sapi</a>
                    <a href="page.php?peternak-daftar-pakan&id=<?= $_SESSION['id_user'] ;?>" class="nav-item nav-link"><i class="fa-solid fa-leaf me-2"></i>Daftar Pakan Sapi</a>
                    <a href="page.php?peternak-daftar-vaksin&id=<?= $_SESSION['id_user'] ;?>" class="nav-item nav-link"><i class="fa-solid fa-syringe me-2"></i>Daftar Vaksin Sapi</a>
                    <a href="page.php?peternak-daftar-indukan&id=<?= $_SESSION['id_user'] ;?>" class="nav-item nav-link"><i class="fa-solid fa-cow me-2"></i>Daftar Indukan</a>
                    <a href="page.php?peternak-history&id=<?= $_SESSION['id_user'] ;?>" class="nav-item nav-link"><i class="fa-solid fa-clock-rotate-left me-2"></i>History</a>
                    <a href="page.php?logout" class="nav-item nav-link"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-user"></i>
                            <span class="d-none d-lg-inline-flex"><?= $_SESSION['username'] ;?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <!-- <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a> -->
                            <a href="page.php?logout" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-10 bg-light rounded mb-2">
                    <div class="col-md mt-3 ms-3">