<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "html/head.php" ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow">
            <div class="container">

                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <span><i class="fa-solid fa-address-card"></i>&nbsp;JobHT</span>
                </a>

                <!-- Toggle hide navbar when resize -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Navbar -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ms-2">
                            <a class="nav-link" style="color: #2bb5cf" href="#"><i class="fa-solid fa-briefcase"></i>&nbsp;Ngành nghề</a>
                        </li>
                        <li class="nav-item ms-2">
                            <a class="nav-link" href="#"><i class="fa-solid fa-building"></i>&nbsp;Công ty</a>
                        </li>
                        <li class="nav-item ms-2">
                            <a class="nav-link" href="#"><i class="fa-solid fa-user-tie"></i>&nbsp;Tạo CV</a>
                        </li>
                        <li class="nav-item ms-2">
                            <a class="nav-link" href="#"><i class="fa-solid fa-newspaper"></i>&nbsp;Blog</a>
                        </li>
                    </ul>

                    <!-- Right Navbar -->
                    <div class="d-flex">
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

    <!-- Banner -->
    <section class="banner">
        <div class="shadow mt-5 p-5 text-dark text-center bg-hero-banner">
            <div id="search-form" style="width: 90%">
                <h1 class="pb-2 custom-title fw-bold">Cơ hội mới! Tương lai mới!</h1>
                <h6 class="custom-title">Tìm việc làm và cơ hội nghề nghiệp của bạn ngay bây giờ !</h6>
                <form action="" method="" class="d-flex justify-content-center row p-3" id="formSearchJob">
                    <div class="shadow-lg row p-3">
                        <div class="col-md-4 col-sm-4 custom-form">
                            <span class="custom-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                            <input class="form-control" type="text" name="position" placeholder="Vị trí bạn muốn ứng tuyển">
                        </div>
                        <div class="col-md-3 col-sm-4 custom-form">
                            <span class="custom-icon"><i class="fa-solid fa-briefcase"></i></span>
                            <input class="form-control" type="text" list="careers" name="career" placeholder="Tất cả ngành nghề">
                            <datalist id="careers">
                                <option value="IT phần mềm">
                                <option value="Quản trị kinh doanh">
                                <option value="Xây dựng">
                                <option value="Cơ khí">
                                <option value="Kỹ thuật">
                                <option value="Pháp lý - Luật">
                                <option value="Marketing - PR">
                            </datalist>
                        </div>
                        <div class="col-md-3 col-sm-4 custom-form">
                            <span class="custom-icon"><i class="fa-solid fa-location-dot"></i></span>
                            <input class="form-control" type="text" list="cities" name="city" placeholder="Tất cả tỉnh thành">
                            <datalist id="cities">
                                <option value="Hồ Chí Minh">
                                <option value="Đồng Nai">
                                <option value="Vũng Tàu">
                                <option value="Tiền Giang">
                                <option value="Cần Thơ">
                                <option value="Đà Nẵng">
                                <option value="Bình Thuận">
                                <option value="Hà Nội">
                            </datalist>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <input class="form-control text-white" style="background-color: #2c95ff;" type="submit" name="search" value="Tìm việc">
                        </div>
                    </div>
                </form>

                <!-- Keyword search -->
                <div class="pt-3">
                    <ul class="list-inline fw-bold fs-6">
                        <li class="list-inline-item">Java</li>
                        <li class="list-inline-item">PHP</li>
                        <li class="list-inline-item">C#</li>
                        <li class="list-inline-item">Javascript</li>
                        <li class="list-inline-item">NodeJS</li>
                        <li class="list-inline-item">React</li>
                        <li class="list-inline-item">Python</li>
                        <li class="list-inline-item">Golang</li>
                        <li class="list-inline-item">Tester</li>
                        <li class="list-inline-item">BA</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Category career -->
    <section class="category-career" style="background-color: hsl(0, 0%, 98%)">
        <div class="container pb-2" style="max-width: 1160px;">
            <div class="col-md-12 col-12">
                <div class="row d-flex justify-content-center">
                    <p class="py-5 h2 text-center text-secondary">Đa dạng ngành nghề</p>
                </div>

                <div class="row mb-5 d-flex justify-content-center" style="background: radial-gradient(rgba(13, 110, 253, .06), white);">
                    <div class="card shadow-sm border-1 cs-list-job mx-3" style="width: 10rem;">
                        <div class="card-body text-center">
                            <a href=""><img src="images/listjob/it.png" alt="jobit"></a>
                            <p class="card-title pt-2">Công Nghệ</p>
                        </div>
                    </div>

                    <div class="card shadow-sm border-1 cs-list-job mx-3" style="width: 10rem;">
                        <div class="card-body text-center">
                            <a href=""><img src="images/listjob/marketing.png" alt="jobmarketing"></a>
                            <p class="card-title pt-2">Marketing</p>
                        </div>
                    </div>

                    <div class="card shadow-sm border-1 cs-list-job mx-3" style="width: 10rem;">
                        <div class="card-body text-center">
                            <a href=""><img src="images/listjob/business.png" alt="jobbusiness"></a>
                            <p class="card-title pt-2">Kinh Doanh</p>
                        </div>
                    </div>

                    <div class="card shadow-sm border-1 cs-list-job mx-3" style="width: 10rem;">
                        <div class="card-body text-center">
                            <a href=""><img src="images/listjob/technique.png" alt="jobtechnique"></a>
                            <p class="card-title pt-2">Kỹ Thuật</p>
                        </div>
                    </div>

                    <div class="card shadow-sm border-1 cs-list-job mx-3" style="width: 10rem;">
                        <div class="card-body text-center">
                            <a href=""><img src="images/listjob/accounting.png" alt="jobaccounting"></a>
                            <p class="card-title pt-2">Kế Toán</p>
                        </div>
                    </div>

                    <div class="card shadow-sm border-1 cs-list-job mx-3" style="width: 10rem;">
                        <div class="card-body text-center">
                            <a href=""><img src="images/listjob/economic.png" alt="jobeconomic"></a>
                            <p class="card-title pt-2">Kinh Tế</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Post job & sidebar -->
    <section class="post-job" style="background-color: hsl(0, 0%, 98%)">
        <div class="container pb-5 px-5" style="max-width: 1200px;">
            <div class="row">
                <div class="col-md-8">
                    <!-- button time job -->
                    <div class="d-flex justify-content-end my-4">
                        <a href="" class=" border cs-box cs-card border-secondary btn btn-light mx-1">Full Time</a>
                        <a href="" class=" border cs-box cs-card border-secondary btn btn-light mx-1">Part Time</a>
                        <a href="" class=" border cs-box cs-card border-secondary btn btn-light mx-1">Freelance</a>
                        <a href="" class=" border cs-box cs-card border-secondary btn btn-light mx-1">Intern</a>
                    </div>

                    <div class="card cs-card border-1 shadow-sm mt-2 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 logo-box d-flex align-items-center">
                                <a href=""><img src="images/LogoFPT.jpg" class="img-fluid rounded" alt="..."></a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="pb-1" style="font-size: 18px;">
                                        <a class="text-decoration-none card-title fw-bold title-job" href="">Backend Developer</a>
                                    </div>
                                    <div class="card-text" style="font-size: 15px;">
                                        <div>
                                            <i class="bi bi-building"></i>
                                            <span class="ps-1">Công Ty Cổ Phần FPT</span>
                                        </div>
                                        <div>
                                            <i class="bi bi-geo-alt"></i>
                                            <span class="ps-1">Hồ Chí Minh</span>
                                        </div>
                                        <div class="text-success">
                                            <i class="bi bi-cash"></i>
                                            <span class="ps-1">$500 - $1200</span>
                                        </div>
                                        <div>
                                            <i class="bi bi-hourglass-split"></i>
                                            <span class="ps-1">23/04/2022</span>
                                        </div>
                                    </div>
                                    <div>
                                        <small class="text-muted time-post-job">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 pt-3 pe-3">
                                <button class="border-0 bg-white float-end">
                                    <span>
                                        <h5><i class="bi bi-heart"></i></h5>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card cs-card border-1 shadow-sm mt-2 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 logo-box d-flex align-items-center">
                                <a href=""><img src="images/LogoFPT.jpg" class="img-fluid rounded" alt="..."></a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="pb-1" style="font-size: 18px;">
                                        <a class="text-decoration-none card-title fw-bold title-job" href="">Frontend Developer</a>
                                    </div>
                                    <div class="card-text" style="font-size: 15px;">
                                        <div>
                                            <i class="bi bi-building"></i>
                                            <span class="ps-1">Công Ty Cổ Phần FPT</span>
                                        </div>
                                        <div>
                                            <i class="bi bi-geo-alt"></i>
                                            <span class="ps-1">Hồ Chí Minh</span>
                                        </div>
                                        <div class="text-success">
                                            <i class="bi bi-cash"></i>
                                            <span class="ps-1">$500 - $1200</span>
                                        </div>
                                        <div>
                                            <i class="bi bi-hourglass-split"></i>
                                            <span class="ps-1">23/04/2022</span>
                                        </div>
                                    </div>
                                    <div>
                                        <small class="text-muted time-post-job">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 pt-3 pe-3">
                                <button class="border-0 bg-white float-end">
                                    <span>
                                        <h5><i class="bi bi-heart"></i></h5>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card cs-card border-1 shadow-sm mt-2 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 logo-box d-flex align-items-center">
                                <a href=""><img src="images/LogoFPT.jpg" class="img-fluid rounded" alt="..."></a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="pb-1" style="font-size: 18px;">
                                        <a class="text-decoration-none card-title fw-bold title-job" href="">Architect</a>
                                    </div>
                                    <div class="card-text" style="font-size: 15px;">
                                        <div>
                                            <i class="bi bi-building"></i>
                                            <span class="ps-1">Công Ty Cổ Phần FPT</span>
                                        </div>
                                        <div>
                                            <i class="bi bi-geo-alt"></i>
                                            <span class="ps-1">Hồ Chí Minh</span>
                                        </div>
                                        <div class="text-success">
                                            <i class="bi bi-cash"></i>
                                            <span class="ps-1">$500 - $1200</span>
                                        </div>
                                        <div>
                                            <i class="bi bi-hourglass-split"></i>
                                            <span class="ps-1">23/04/2022</span>
                                        </div>
                                    </div>
                                    <div>
                                        <small class="text-muted time-post-job">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 pt-3 pe-3">
                                <button class="border-0 bg-white float-end">
                                    <span>
                                        <h5><i class="bi bi-heart"></i></h5>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card cs-card border-1 shadow-sm mt-2 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 logo-box d-flex align-items-center">
                                <a href=""><img src="images/LogoFPT.jpg" class="img-fluid rounded" alt="..."></a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="pb-1" style="font-size: 18px;">
                                        <a class="text-decoration-none card-title fw-bold title-job" href="">Business Analyst</a>
                                    </div>
                                    <div class="card-text" style="font-size: 15px;">
                                        <div>
                                            <i class="bi bi-building"></i>
                                            <span class="ps-1">Công Ty Cổ Phần FPT</span>
                                        </div>
                                        <div>
                                            <i class="bi bi-geo-alt"></i>
                                            <span class="ps-1">Hồ Chí Minh</span>
                                        </div>
                                        <div class="text-success">
                                            <i class="bi bi-cash"></i>
                                            <span class="ps-1">$500 - $1200</span>
                                        </div>
                                        <div>
                                            <i class="bi bi-hourglass-split"></i>
                                            <span class="ps-1">23/04/2022</span>
                                        </div>
                                    </div>
                                    <div>
                                        <small class="text-muted time-post-job">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 pt-3 pe-3">
                                <button class="border-0 bg-white float-end">
                                    <span>
                                        <h5><i class="bi bi-heart"></i></h5>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card cs-card border-1 shadow-sm mt-2 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 logo-box d-flex align-items-center">
                                <a href=""><img src="images/LogoFPT.jpg" class="img-fluid rounded" alt="..."></a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="pb-1" style="font-size: 18px;">
                                        <a class="text-decoration-none card-title fw-bold title-job" href="">Business Analyst</a>
                                    </div>
                                    <div class="card-text" style="font-size: 15px;">
                                        <div>
                                            <i class="bi bi-building"></i>
                                            <span class="ps-1">Công Ty Cổ Phần FPT</span>
                                        </div>
                                        <div>
                                            <i class="bi bi-geo-alt"></i>
                                            <span class="ps-1">Hồ Chí Minh</span>
                                        </div>
                                        <div class="text-success">
                                            <i class="bi bi-cash"></i>
                                            <span class="ps-1">$500 - $1200</span>
                                        </div>
                                        <div>
                                            <i class="bi bi-hourglass-split"></i>
                                            <span class="ps-1">23/04/2022</span>
                                        </div>
                                    </div>
                                    <div>
                                        <small class="text-muted time-post-job">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 pt-3 pe-3">
                                <button class="border-0 bg-white float-end">
                                    <span>
                                        <h5><i class="bi bi-heart"></i></h5>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card cs-card border-1 shadow-sm mt-2 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 logo-box d-flex align-items-center">
                                <a href=""><img src="images/LogoFPT.jpg" class="img-fluid rounded" alt="..."></a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="pb-1" style="font-size: 18px;">
                                        <a class="text-decoration-none card-title fw-bold title-job" href="">Business Analyst</a>
                                    </div>
                                    <div class="card-text" style="font-size: 15px;">
                                        <div>
                                            <i class="bi bi-building"></i>
                                            <span class="ps-1">Công Ty Cổ Phần FPT</span>
                                        </div>
                                        <div>
                                            <i class="bi bi-geo-alt"></i>
                                            <span class="ps-1">Hồ Chí Minh</span>
                                        </div>
                                        <div class="text-success">
                                            <i class="bi bi-cash"></i>
                                            <span class="ps-1">$500 - $1200</span>
                                        </div>
                                        <div>
                                            <i class="bi bi-hourglass-split"></i>
                                            <span class="ps-1">23/04/2022</span>
                                        </div>
                                    </div>
                                    <div>
                                        <small class="text-muted time-post-job">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 pt-3 pe-3">
                                <button class="border-0 bg-white float-end">
                                    <span>
                                        <h5><i class="bi bi-heart"></i></h5>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card cs-card border-1 shadow-sm mt-2 mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 logo-box d-flex align-items-center">
                                <a href=""><img src="images/LogoFPT.jpg" class="img-fluid rounded" alt="..."></a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="pb-1" style="font-size: 18px;">
                                        <a class="text-decoration-none card-title fw-bold title-job" href="">Business Analyst</a>
                                    </div>
                                    <div class="card-text" style="font-size: 15px;">
                                        <div>
                                            <i class="bi bi-building"></i>
                                            <span class="ps-1">Công Ty Cổ Phần FPT</span>
                                        </div>
                                        <div>
                                            <i class="bi bi-geo-alt"></i>
                                            <span class="ps-1">Hồ Chí Minh</span>
                                        </div>
                                        <div class="text-success">
                                            <i class="bi bi-cash"></i>
                                            <span class="ps-1">$500 - $1200</span>
                                        </div>
                                        <div>
                                            <i class="bi bi-hourglass-split"></i>
                                            <span class="ps-1">23/04/2022</span>
                                        </div>
                                    </div>
                                    <div>
                                        <small class="text-muted time-post-job">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 pt-3 pe-3">
                                <button class="border-0 bg-white float-end">
                                    <span>
                                        <h5><i class="bi bi-heart"></i></h5>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Button view all posts -->
                    <div class="d-flex justify-content-end">
                        <a href="" class="view-all">
                            <span>Xem tất cả công việc&nbsp;<i style="font-size: 13px;" class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <!-- Side content -->
                <div class="col-md-4 mt-4">
                    <!-- Location Job -->
                    <div class="card mx-3 border-1 shadow-sm">
                        <div class="single-sidebar px-3">
                            <h5 class="pt-3 ps-3 fw-bold">Các Khu Vực Tuyển Dụng</h5>
                            <ul class="list-group pt-1 pb-4">
                                <li class="list-group-item border-light shadow-sm my-2 cs-list-location">
                                    <a class="d-flex justify-content-between " href="">
                                        <span>Hồ Chí Minh</span>
                                        <span>50</span>
                                    </a>
                                </li>

                                <li class="list-group-item border-light shadow-sm my-2 cs-list-location">
                                    <a class="d-flex justify-content-between " href="">
                                        <span>Hà Nội</span>
                                        <span>70</span>
                                    </a>
                                </li>

                                <li class="list-group-item border-light shadow-sm my-2 cs-list-location">
                                    <a class="d-flex justify-content-between " href="">
                                        <span>Đà Nẵng</span>
                                        <span>48</span>
                                    </a>
                                </li>

                                <li class="list-group-item border-light shadow-sm my-2 cs-list-location">
                                    <a class="d-flex justify-content-between " href="">
                                        <span>Bình Dương</span>
                                        <span>80</span>
                                    </a>
                                </li>

                                <li class="list-group-item border-light shadow-sm my-2">
                                    <a class="d-flex justify-content-between " href="">
                                        <span>Hải Phòng</span>
                                        <span>27</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Carousel banner job -->
                    <div class="mx-3 my-4 shadow-sm">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href=""><img src="images/carousel/01.webp" class="d-block w-100" alt="carousel-job"></a>
                                </div>
                                <div class="carousel-item">
                                    <a href=""><img src="images/carousel/02.webp" class="d-block w-100" alt="carousel-job"></a>
                                </div>
                                <div class="carousel-item">
                                    <a href=""><img src="images/carousel/03.webp" class="d-block w-100" alt="carousel-job"></a>
                                </div>
                                <div class="carousel-item">
                                    <a href=""><img src="images/carousel/04.webp" class="d-block w-100" alt="carousel-job"></a>
                                </div>
                                <div class="carousel-item">
                                    <a href=""><img src="images/carousel/05.webp" class="d-block w-100" alt="carousel-job"></a>
                                </div>
                                <div class="carousel-item">
                                    <a href=""><img src="images/carousel/06.webp" class="d-block w-100" alt="carousel-job"></a>
                                </div>
                                <div class="carousel-item">
                                    <a href=""><img src="images/carousel/07.webp" class="d-block w-100" alt="carousel-job"></a>
                                </div>
                                <div class="carousel-item">
                                    <a href=""><img src="images/carousel/08.webp" class="d-block w-100" alt="carousel-job"></a>
                                </div>
                                <div class="carousel-item">
                                    <a href=""><img src="images/carousel/09.webp" class="d-block w-100" alt="carousel-job"></a>
                                </div>
                                <div class="carousel-item">
                                    <a href=""><img src="images/carousel/10.webp" class="d-block w-100" alt="carousel-job"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category Job -->
                    <div class="card mx-3 border-1 shadow-sm">
                        <div class="single-sidebar px-3">
                            <h5 class="pt-3 ps-3 fw-bold">Các ngành nghề hot</h5>
                            <ul class="list-group pt-1 pb-4">
                                <li class="list-group-item border-light shadow-sm my-2 cs-list-location">
                                    <a class="d-flex justify-content-between " href="">
                                        <span>Công Nghệ</span>
                                        <span>150</span>
                                    </a>
                                </li>

                                <li class="list-group-item border-light shadow-sm my-2 cs-list-location">
                                    <a class="d-flex justify-content-between " href="">
                                        <span>Marketing</span>
                                        <span>50</span>
                                    </a>
                                </li>

                                <li class="list-group-item border-light shadow-sm my-2 cs-list-location">
                                    <a class="d-flex justify-content-between " href="">
                                        <span>Kinh Doanh</span>
                                        <span>78</span>
                                    </a>
                                </li>

                                <li class="list-group-item border-light shadow-sm my-2 cs-list-location">
                                    <a class="d-flex justify-content-between " href="">
                                        <span>Kỹ Thuật</span>
                                        <span>93</span>
                                    </a>
                                </li>

                                <li class="list-group-item border-light shadow-sm my-2">
                                    <a class="d-flex justify-content-between " href="">
                                        <span>Kế Toán</span>
                                        <span>29</span>
                                    </a>
                                </li>

                                <li class="list-group-item border-light shadow-sm my-2">
                                    <a class="d-flex justify-content-between " href="">
                                        <span>Kinh Tế</span>
                                        <span>43</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End side content -->
            </div>
    </section>

    <!-- Carousel top employers -->
    <section class="top-employers">
        
        <div class="container">
            <div class="top-company">
                <p class="pt-5 pb-4 h2 text-center text-secondary">Nhà tuyển dụng hàng đầu</p>
            </div>

            <div class="owl-carousel owl-theme mb-5">
                <div class="item d-flex justify-content-center">
                    <a href="">
                        <img class="img-fluid border-list-company" src="images/listcompany/mailisa.jpeg" alt="">
                        <p class="text-center pt-3" style="font-size: .75rem;">MAILISA</p>
                    </a>
                </div>
                <div class="item d-flex justify-content-center">
                    <a href="">
                        <img class="img-fluid border-list-company" src="images/listcompany/namgroup.png" alt="">
                        <p class="text-center pt-3" style="font-size: .75rem;">NAM GROUP</p>
                    </a>
                </div>
                <div class="item d-flex justify-content-center">
                    <a href="">
                        <img class="img-fluid border-list-company" src="images/listcompany/th.png" alt="">
                        <p class="text-center pt-3" style="font-size: .75rem;">TH</p>
                    </a>
                </div>
                <div class="item d-flex justify-content-center">
                    <a href="">
                        <img class="img-fluid border-list-company" src="images/listcompany/thp.png" alt="">
                        <p class="text-center pt-3" style="font-size: .75rem;">TÂN HIỆP PHÁT</p>
                    </a>
                </div>
                <div class="item d-flex justify-content-center">
                    <a href="">
                        <img class="img-fluid border-list-company" src="images/listcompany/tpbank.png" alt="">
                        <p class="text-center pt-3" style="font-size: .75rem;">TPBANK</p>
                    </a>
                </div>
                <div class="item d-flex justify-content-center">
                    <a href="">
                        <img class="img-fluid border-list-company" src="images/listcompany/vinbus.png" alt="">
                        <p class="text-center pt-3" style="font-size: .75rem;">VINBUS</p>
                    </a>
                </div>
                <div class="item d-flex justify-content-center">
                    <a href="">
                        <img class="img-fluid border-list-company" src="images/listcompany/vinfast.jpeg" alt="">
                        <p class="text-center pt-3" style="font-size: .75rem;">VINFAST</p>
                    </a>
                </div>
                <div class="item d-flex justify-content-center">
                    <a href="">
                        <img class="img-fluid border-list-company" src="images/listcompany/vpbank.png" alt="">
                        <p class="text-center pt-3" style="font-size: .75rem;">VPBANK</p>
                    </a>
                </div>
                <div class="item d-flex justify-content-center">
                    <a href="">
                        <img class="img-fluid border-list-company" src="images/listcompany/vus.jpeg" alt="">
                        <p class="text-center pt-3" style="font-size: .75rem;">VUS</p>
                    </a>
                </div>
                <div class="item d-flex justify-content-center">
                    <a href="">
                        <img class="img-fluid border-list-company" src="images/listcompany/qtsc.jpg" alt="">
                        <p class="text-center pt-3" style="font-size: .75rem;">QTSC</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Blogs -->
    <section class="all-blogs">
        <!-- Blog -->
        <div class="container">
            <div class="blog-title">
                <p class="pt-5 pb-4 h2 text-center text-secondary">Blog</p>
            </div>
            <div class="blogs mb-5">
                <div class="row">

                    <div class="col">
                        <div class="border border-light shadow border-blog mx-1" style="max-width: 290px;">
                            <div class="d-flex justify-content-center bor">
                                <a href=""><img src="images/testt.jpg" class="card-img-top img-fluid cs-zoom-img" style="width: 300px; height: 200px" alt="..."></a>
                            </div>
                            <div class="card-body">
                                <a href="">
                                    <h6 title="Top 5 kênh youtube Việt truyền cảm hứng và năng lượng tích cực cho giới trẻ" class="card-title title-job cs-ellipsis-2 pb-1">Top 5 kênh youtube Việt truyền cảm hứng và năng lượng tích cực cho giới trẻ</h6>
                                </a>
                                <p class="card-text cs-ellipsis-4" style="font-size: 15px;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer little bit longer little bit longer little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="border border-light shadow border-blog mx-1" style="max-width: 290px;">
                            <div class="d-flex justify-content-center bor">
                                <a href=""><img src="images/testt2.png" class="card-img-top img-fluid cs-zoom-img" style="width: 300px; height: 200px" alt="..."></a>
                            </div>
                            <div class="card-body">
                                <a href="">
                                    <h6 title="Top 5 kênh youtube Việt truyền cảm hứng và năng lượng tích cực cho giới trẻ" class="card-title title-job cs-ellipsis-2 pb-1">Top 5 kênh youtube Việt truyền cảm hứng và năng lượng tích cực cho giới trẻ</h6>
                                </a>
                                <p class="card-text cs-ellipsis-4" style="font-size: 15px;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer little bit longer little bit longer little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="border border-light shadow border-blog mx-1" style="max-width: 290px;">
                            <div class="d-flex justify-content-center bor">
                                <a href=""><img src="images/testt3.jpg" class="card-img-top img-fluid cs-zoom-img" style="width: 300px; height: 200px" alt="..."></a>
                            </div>
                            <div class="card-body">
                                <a href="">
                                    <h6 title="Top 5 kênh youtube Việt truyền cảm hứng và năng lượng tích cực cho giới trẻ" class="card-title title-job cs-ellipsis-2 pb-1">Top 5 kênh youtube Việt truyền cảm hứng và năng lượng tích cực cho giới trẻ</h6>
                                </a>
                                <p class="card-text cs-ellipsis-4" style="font-size: 15px;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer little bit longer little bit longer little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="border border-light shadow border-blog mx-1" style="max-width: 290px;">
                            <div class="d-flex justify-content-center bor">
                                <a href=""><img src="images/testt.jpg" class="card-img-top img-fluid cs-zoom-img" style="width: 300px; height: 200px" alt="..."></a>
                            </div>
                            <div class="card-body">
                                <a href="">
                                    <h6 title="Top 5 kênh youtube Việt truyền cảm hứng và năng lượng tích cực cho giới trẻ" class="card-title title-job cs-ellipsis-2 pb-1">Top 5 kênh youtube Việt truyền cảm hứng và năng lượng tích cực cho giới trẻ</h6>
                                </a>
                                <p class="card-text cs-ellipsis-4" style="font-size: 15px;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer little bit longer little bit longer little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-4 me-2">
                    <a href="" class="view-all">
                        <span>Xem thêm blog&nbsp;<i style="font-size: 13px;" class="fa-solid fa-arrow-right"></i></span>
                        
                    </a>
                </div>

            </div>
        </div>
        <!-- End blog -->
    </section>

    <!-- Footer Page -->
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: black;">
            <a class="text-white" href="https://www.facebook.com/darkelixir.cocq">© 2022 Copyright JobHT By Quang Nguyen</a>
        </div>
        <!-- Copyright -->
    </footer>
    <?php require_once "html/script.php" ?>
</body>
</html>