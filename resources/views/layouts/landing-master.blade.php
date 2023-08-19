<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sora' rel='stylesheet'>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link href="{{asset('css/landing.css')}}" rel="stylesheet" />

    <title>5R Departemen Pengadaan Jasa</title>
    @livewireStyles
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid justify-content-end px-md-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link"><i class="fas fa-clock"></i> Senin ~ Jumat - 7:00-16:00</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/5rdjfresh/?next=%2F&hl=ms"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('landing')}}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="https://goo.gl/maps/AanfwtiY7NJheZpv9" target="_blank">Lokasi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-light bg-white py-4">
        <div class="container justify-content-sm-between justify-content-around px-md-5">
            <a class="navbar-brand" href="https://5rdjfresh.com/" target="_blank">
                <img src="{{asset('img/djfresh.jpeg')}}" height="47" class="text-center">
            </a>
            <a class="navbar-brand" href="https://petrokimia-gresik.com/" target="_blank">
                <img src="{{asset('img/petro-logo.png')}}" height="40" class="text-center">
            </a>
            <a class="navbar-brand" href="https://bumn.go.id/" target="_blank">
                <img src="{{asset('img/bumn-logo.png')}}" height="20" class="text-center">
            </a>
            <a class="navbar-brand" href="https://www.pupuk-indonesia.com/" target="_blank">
                <img src="{{asset('img/pi-logo.png')}}" height="40" class="text-center">
            </a>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-darkslategray">
        <div class="container-fluid justify-content-end px-md-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-md-3 me-sm-0">
                        <a class="nav-link text-white text-uppercase" aria-current="page" href="{{route('landing')}}">Beranda</a>
                    </li>
                    <li class="nav-item me-md-3 me-sm-0 dropdown">
                        <a class="nav-link text-white text-uppercase dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('profil')}}#susunan-content">Susunan Pengurus</a></li>
                            <li><a class="dropdown-item" href="{{route('profil')}}#denah-content">Denah</a></li>
                            <li><a class="dropdown-item" href="{{route('profil')}}#komitmen-content">Komitmen 5R</a></li>
                        </ul>
                    </li>
                    <li class="nav-item me-md-3 me-sm-0 dropdown">
                        <a class="nav-link text-white text-uppercase dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Monitoring 5R
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('monitor')}}#monitor-content">Monitoring Area</a></li>
                            <li><a class="dropdown-item" href="{{route('monitor')}}#galeri-content">Galeri 5R</a></li>
                        </ul>
                    </li>
                    <li class="nav-item me-md-3 me-sm-0">
                        <a class="nav-link text-white text-uppercase" aria-current="page" href="{{route('reward')}}">Rewarding</a>
                    </li>
                    <li class="nav-item me-md-3 me-sm-0 dropdown">
                        <a class="nav-link text-white text-uppercase dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pesan & Kesan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('pesan')}}#video-content">Video</a></li>
                            <li><a class="dropdown-item" href="{{route('pesan')}}#pesan-content">Pesan & Kesan</a></li>
                            <li><a class="dropdown-item" href="{{route('pesan')}}#form-content">Formulir Pesan & Kesan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item me-md-3 me-sm-0 dropdown">
                        <a class="nav-link text-white text-uppercase dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tautan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('tautan')}}#medsos-content">Media Sosial</a></li>
                            <li><a class="dropdown-item" href="{{route('tautan')}}#website-content">Website Terkait</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('body')

    <div class="bg-darkslategray pt-4" style="font-family: Sora;">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 justify-content-between p-5">
            <div class="col mb-6">
                <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    <img src="{{asset('img/petro-logo.png')}}" height="40" class="text-center">
                </a>
                <h6 class="text-khaki">DEPARTEMEN PENGADAAN JASA</h6>
                <p style="font-size: 12px; text-align: justify;">Kantor Pusat PT Petrokimia Gresik Lantai III, Jl. Jend. Ahmad Yani Gresik 61119 Jawa Timur</p>
                <p class="text-muted" style="font-size: 12px;">Copyright &copy; 2023 Pengadaan Jasa</p>
            </div>
            <div class="col mb-2">
                <h5 class="text-khaki">Profil</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{route('profil')}}#susunan-content" class="nav-link p-0 text-white">Susunan Pengurus</a></li>
                    <li class="nav-item mb-2"><a href="{{route('profil')}}#komitmen-content" class="nav-link p-0 text-white">Komitmen 5R</a></li>
                    <li class="nav-item mb-2"><a href="{{route('profil')}}#denah-content" class="nav-link p-0 text-white">Denah</a></li>
                </ul>
                <h5 class="text-khaki mt-2">Monitoring 5R</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{route('monitor')}}#monitor-content" class="nav-link p-0 text-white">Monitoring Area</a></li>
                    <li class="nav-item mb-2"><a href="{{route('monitor')}}#galeri-content" class="nav-link p-0 text-white">Galeri 5R</a></li>
                </ul>
            </div>
            <div class="col mb-2">
                <h5 class="text-khaki">Pesan & Kesan</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{route('pesan')}}#form-content" class="nav-link p-0 text-white">Formulir Pesan & Kesan</a></li>
                    <li class="nav-item mb-2"><a href="{{route('pesan')}}#pesan-content" class="nav-link p-0 text-white">Pesan & Kesan</a></li>
                    <li class="nav-item mb-2"><a href="{{route('pesan')}}#video-content" class="nav-link p-0 text-white">Video</a></li>
                </ul>
                <h5 class="text-khaki mt-2">Rewarding</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{route('reward')}}" class="nav-link p-0 text-white">Rewarding</a></li>
                </ul>
            </div>
            <div class="col mb-2">
                <h5 class="text-khaki">Tautan</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{route('tautan')}}#medsos-content" class="nav-link p-0 text-white">Media Sosial</a></li>
                    <li class="nav-item mb-2"><a href="{{route('tautan')}}#website-content" class="nav-link p-0 text-white">Website Terkait</a></li>
                    @if(Auth::user())
                    <li class="nav-item mb-2"><a href="{{route('dashboard')}}" class="nav-link p-0 text-white">Dashboard</a></li>
                    @else
                    <li class="nav-item mb-2"><a href="{{route('login')}}" class="nav-link p-0 text-white">Login</a></li>
                    @endif
                </ul>
            </div>
        </footer>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    @stack('scripts')
    @livewireScripts
</body>

</html>