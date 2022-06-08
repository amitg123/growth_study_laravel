<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Growth Study</title>

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{{asset('assets/img/logo-1-300x180.png')}}" width="100px" height="50px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header" style="border-bottom:solid 1px red ;">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="{{asset('assets/img/logo-1-300x180.png')}}" width="100px" height="50px"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item" style="font-weight:bold ;">
                                <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-heart-fill"></i> &nbsp;Home</a>
                            </li>
                            <hr>
                            <li class="nav-item" style="font-weight:bold ;">
                                <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-blockquote-left"></i>&nbsp;Blog</a>
                            </li>
                            <hr>
                            <li class="nav-item dropdown" style="font-weight:bold ;">
                                <a class="nav-link active dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-lines-fill"></i>&nbsp;Contact Us
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-telephone-fill"></i>&nbsp;+91-9267XXXXXX</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-telephone-fill"></i>&nbsp;+91-9267XXXXXX</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-envelope-open-fill"></i>&nbsp;amitg2096@gmail.com</a></li>
                                </ul>
                            </li>
                            <hr>
                            <li class="nav-item" style="font-weight:bold ;">
                                <a class="nav-link active" href="#"><i class="bi bi-life-preserver"></i>&nbsp;Services</a>
                            </li>
                            <hr>
                            <li class="nav-item dropdown" style="font-weight:bold ;">
                                <a class="nav-link active dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-circle"></i> &nbsp;Account
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-person-check"></i>&nbsp;Account Info</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i>&nbsp;Account Setting</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i>&nbsp;Logout</a></li>
                                </ul>
                            </li>
                            <hr>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="main-content clear">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    @section('container')
                     @show
                        
                    </div>
                </div>
            </div>
    <footer class="footer">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="footer-col col-lg-3">
                    <h4>Company</h4>
                    <ul class="list-group">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Affiliate Program</a></li>
                    </ul>
                </div>
                <div class="footer-col col-lg-3">
                    <h4>Get Help</h4>
                    <ul class="list-group">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Order Status</a></li>
                        <li><a href="#">Payment Option</a></li>
                    </ul>
                </div>
                <div class="footer-col col-lg-3">
                    <h4>Services</h4>
                    <ul class="list-group">
                        <li><a href="#">Content Marketing</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">Creative Writing</a></li>
                        <li><a href="#">Website Development</a></li>
                    </ul>
                </div>
                <div class="footer-col col-lg-3">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>