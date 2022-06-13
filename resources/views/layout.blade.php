<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>@yield('title')</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
    <link rel="icon" href="{{ asset('admin/img/icon2.png') }}">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />




    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/fontawesome.all.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />

    

    @yield('style')



</head>

<body>


    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">

            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('images/icon.png')}}" alt="" width="50" height="50" class="d-inline-block align-text-bottom">
                <span class="">Banking.</span>
                </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/viewAll')}}">View Clients</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    @yield('main')


    <!-- Footer -->
    {{-- <footer >
    
        <div class="container">
            <div class="row">
                <div  class="col-md-12">
                </div>
                <div class="col-md-6">
                    <div class="content">
                        <img src="{{ asset('img/hamza_education.png') }}" alt="logo">

                        <div class="w-form">
                        <div class="footer-newsletter-form">
                        <input type="email" class="input newsletter w-input" maxlength="256" name="Email" data-name="Email" placeholder="Enter your message" >
                        <input type="submit" value="Submit" data-wait="Please wait..." class="button-primary newsletter w-button">
                        </div>
                        </div>
                        <p><a class="guide" href="https://www.youtube.com/channel/UCqGsISX5O2tvS7aHaCGQ8pA">Youtube guide video</a></p>


                    </div>
                </div>
                    <div class="col-md-2">
                        <div class="content">
                            <h4><span>Pages</span></h4>
                            <a class="page_link" href="{{url('/')}}">Home</a>
                            <a class="page_link" href="/teacher">Teacher</a>
                            <a class="page_link" href="{{url('/register')}}">ٌRegister</a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="content">
                            <h4><span>Contact</span></h4>
                            <h5><i class="icon fas fa-phone-alt"></i><p class="d-inline p-3">01116646302</p> </h5>
                            <h5><i class="icon fas fa-phone-alt"></i><p class="d-inline p-3">01069426890</p> </h5>
                            <h5><i class="icon fas fa-phone-alt"></i><p class="d-inline p-3">01110379666</p> </h5>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="content">
                            <h4><span>Follow</span></h4>
                            <h5><i class="icon fab fa-facebook"></i> <a class="nav_link p-3" href="https://www.facebook.com/hamza.education1/" target="_blank" >Facebook</a></h5>
                            <h5><i class="icon fab fa-youtube"></i> <a class="nav_link p-3" href="https://www.youtube.com/channel/UCqGsISX5O2tvS7aHaCGQ8pA" target="_blank" >Youtube</a></h5>
                            <h5><i class="icon far fa-envelope"></i> <a class="nav_link p-3" href="mailto:info@hamza-education.com" target="_blank" >Gmail</a></h5>
                        </div>
                    </div>


            </div>
            <div class="small">
                <div class="copy">
                    <h5>Copyright © 2022. All Rights Reserved.| Made With <i class="far fa-heart"></i> By<a href="https://www.facebook.com/7oss2mashr2f" target="_blank" rel="noopener noreferrer">7oSsaM</a>,<a href="https://www.facebook.com/Simulatr" target="_blank" rel="noopener noreferrer">Mahmoud</a></h5>
                </div>
            </div>
        </div>
    

    </footer> --}}
    <!-- /Footer -->

    <!-- preloader -->

    <!-- /preloader -->


    <!-- jQuery Plugins -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    @yield('js')
</body>

</html>
