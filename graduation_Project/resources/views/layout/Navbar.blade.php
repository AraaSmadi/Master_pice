<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SPA Center - Beauty & Spa HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="{{url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    {{-- <div class="container-fluid bg-light d-none d-lg-block">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-primary pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-primary"><span class="text-dark">SPA</span> Center</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="\" class="nav-item nav-link active">Home</a>
                    <a href="\photographers" class="nav-item nav-link">Photographer</a>
                    <a href="\about" class="nav-item nav-link">About</a>
                    {{-- <a href="\service" class="nav-item nav-link">Services</a> --}}
                    {{-- <a href="\price" class="nav-item nav-link">Pricing</a> --}}

                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="\appointment" class="dropdown-item">Appointment</a>
                            <a href="\opening" class="dropdown-item">Open Hours</a>
                            <a href="\team" class="dropdown-item">Our Team</a>

                        </div>
                    </div> --}}
                    <a href="\contact" class="nav-item nav-link">Contact</a>
                </div>
                {{-- @if (!Session::has('id')) --}}
                <a href="\registeration" class="btn btn-primary d-none d-lg-block " style="border-radius: 60px">register</a>
                <a href="\Login" class="btn btn-primary d-none d-lg-block" style="border-radius: 60px ; margin-left:10px; width:90px;">Login</a>
{{-- @else --}}
       <a href="\" class="btn btn-primary d-none d-lg-block" style="border-radius: 60px ; margin-left:10px; width:90px;">Logout</a>

<a href="\" class="btn btn-primary d-none d-lg-block" style="border-radius: 60px ; margin-left:10px; width:90px;">Profile</a>


{{-- @endif --}}
</div>
        </nav>
    </div>
    <!-- Navbar End -->
