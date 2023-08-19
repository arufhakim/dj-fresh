<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <title>Display Information</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('assets/css/argon-dashboard.css?v=2.0.4')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    @livewireStyles
</head>

<body class="overflow-hidden mx-3">
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg shadow-none py-0 px-0 mt-0">
        <div class="container-fluid mt-3">
            <a class="navbar-brand" href="https://petrokimia-gresik.com/" target="_blank">
                <img src="{{asset('img/petro-logo.png')}}" height="40" class="text-center content-hiding">
            </a>
            <a class="navbar-brand" href="https://bumn.go.id/" target="_blank">
                <img src="{{asset('img/bumn-logo.png')}}" height="20" class="text-center content-hiding">
            </a>
            <a class="navbar-brand" href="https://www.pupuk-indonesia.com/" target="_blank">
                <img src="{{asset('img/pi-logo.png')}}" height="40" class="text-center content-hiding">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mt-1">
                    <h4 class="text-center bg-forestgreen custom-rounded py-2 px-3"><span class="text-white">5R DEPARTEMEN PENGADAAN JASA </span><span class="khaki">PT PETROKIMIA GRESIK</span></h4>
                    <!-- <h4 class="text-center bg-forestgreen custom-rounded py-2"><span class="text-white">5R Departemen Pengadaan Jasa </span><span class="khaki">PT Petrokimia Gresik</span></h4> -->
                </ul>
                <div class="row">
                    <div class="col-md-12">
                        <p id="date" class="text-center khaki mb-0 text-sm"></p>
                        <h3 id="time" class="text-center khaki mb-0"></h3>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Nav -->

    <!-- Main -->
    <div class="container-fluid py-2">
        <div class="row flex-row">
            <div class="col-md-5">
                <!-- Video -->
                <div class="col-md-12">
                    <video id="vid" class="custom-rounded p-0 m-0" width="100%" height="auto" controls autoplay loop>
                        <source src="video-upload/{{$video->video}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- End Video -->

                <!-- Foto -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header py-0 bg-khaki">
                            <h6 class="forestgreen pt-2 text-uppercase">Dokumentasi 5R</h6>
                        </div>
                    </div>
                    <div id="carouselExampleCaptions" class="carousel slide custom-rounded-bottom" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($gambar as $img)
                            <div class="carousel-item active">
                                <img src="image-upload/{{$img->gambar}}" height="310" class="d-block w-100 custom-rounded-caro" alt="..." style="object-fit: cover; object-position: center;">
                                <div class="carousel-caption d-none d-md-block mt-2">
                                    <h5 class="khaki text-sm p-1 mb-0 tbg-forestgreen d-inline px-2 py-1 text-uppercase custom-rounded">{{$img->nama}}</h5>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <!-- End Foto -->
            </div>
            <div class="col-md-7">
                <div class="row align-items-center">
                    <livewire:ruangan />

                    <!-- Informasi -->
                    <div class="col-md-10">
                        <div class="card tbg-forestgreen">
                            <div class="card-header pb-0 pt-3 tbg-forestgreen">
                                <h6 class="text-uppercase khaki text-center">Informasi</h6>
                            </div>
                            <div class="card-body px-4 pt-2 pb-2 custom-rounded-bottom tbg-forestgreen">
                                <div class="row">
                                    @foreach($informasi as $berita)
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column border-bottom border-grey mb-2">
                                            <span class="text-xs text-white font-weight-bold mb-2">{{$berita->informasi}}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Informasi -->
                    <div class="col-md-2">
                        @if(Auth::user())
                        <a class="nav-link me-2 text-sm text-center khaki" href="{{route('dashboard')}}">
                            <i class="fas fa-user-circle khaki me-1"></i>
                            Dashboard
                        </a>
                        @else
                        <a class="nav-link me-2 text-sm text-center khaki" href="{{route('login')}}">
                            <i class="fas fa-user-circle khaki me-1"></i>
                            Login
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <!-- End Main -->

    <!-- Date -->
    <script>
        const date = new Date();
        var options = {
            weekday: "long",
            year: "numeric",
            month: "long",
            day: "numeric"
        };
        let tanggal = date.toLocaleDateString("id-ID", options);
        document.getElementById("date").innerHTML = tanggal;
    </script>

    <!-- Time -->
    <script>
        function time() {
            const date = new Date();
            let waktu = date.toLocaleTimeString("id-ID");
            document.getElementById("time").innerHTML = waktu;
        }
        setInterval(time, 1000);
    </script>

    <!--   Core JS Files   -->
    <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('assets/js/argon-dashboard.min.js?v=2.0.4')}}"></script>
    @livewireScripts
</body>

</html>