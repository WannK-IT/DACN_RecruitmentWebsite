<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link href="libs/bootstrap/css/style.css" rel="stylesheet" type="text/css">



    <!-- Icon Font Awesome ver 6.0-->
    <script src="https://kit.fontawesome.com/3c50210ea0.js" crossorigin="anonymous"></script>

    <!-- Icon Bootstrap ver 1.3.0 -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> -->

    <style>
        .bg-hero-banner {
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("images/bg-banner.jpg");
            min-height: 450px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        #search-form {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }
    </style>
</head>

<!-- color active : style="color: #2bb5cf" -->

<body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 17px">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container">

                <!-- Logo -->
                <a class="navbar-brand" href="">
                    <img src="libs/bootstrap/user.png" alt="recruitment">JobHT
                </a>

                <!-- Toggle hide navbar when resize -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Navbar -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ms-1">
                            <a class="nav-link" style="color: #2bb5cf" href="#"><i class="fa-solid fa-briefcase"></i>&nbsp;Ngành nghề</a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="#"><i class="fa-solid fa-building"></i>&nbsp;Công ty</a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="#"><i class="fa-solid fa-user-tie"></i>&nbsp;Tạo CV</a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="#"><i class="fa-solid fa-newspaper"></i>&nbsp;Blog</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <!-- Right Navbar -->
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item me-1">
                                <a class="nav-link" href="#">Đăng nhập</a>
                            </li>

                            <li class="nav-item dropdown me-1">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    VI
                                </a>
                                <ul class="dropdown-menu" style="min-width: 6rem" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">VI</a></li>
                                    <li><a class="dropdown-item" href="#">EN</a></li>
                                </ul>
                            </li>

                            <li class="nav-item me-1 rounded" style="background-color: #2bb5cf">
                                <a class="nav-link text-white" href="#">Nhà tuyển dụng</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main content 1920x570 -->
    <div id="main">
        <div class="mt-3 p-5 text-dark text-center rounded bg-hero-banner">
            <div id="search-form">
                <h1 class="pb-2" style="font-weight: bold;">Cơ hội mới! Tương lai mới!</h1>
                <h6>Hãy tìm việc làm và cơ hội nghề nghiệp của bạn ngay bây giờ !</h6>
                <form action="" method="" id="formSearchJob">
                    <div class="row g-3 p-5">
                        <div class="col-md-3">
                        <div class="input-group">
            <input class="form-control py-2" type="search" value="search" id="example-search-input">
            <span class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="" id="" placeholder="Ngành nghề">
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="" id="" placeholder="Tỉnh thành">
                        </div>
                        <div class="col-md-3">
                            <input class="form-control text-white bg-primary" type="submit" name="" id="" value="Tìm kiếm">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <section class="container-fluid" style="background-color: yellow">
            <!-- All Job Here -->
        </section>

    </div>
    <!-- End main content -->

    <!-- Footer Page -->
    <footer>

    </footer>

    <!-- -- Script -- -->
    <script type="text/javascript" src="libs/bootstrap/js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="libs/bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="libs/bootstrap/js/main.js"></script>
</body>

</html>