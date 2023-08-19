@extends('layouts.landing-master')
@section('body')
<!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('img/carousel-1.jpg')}}" class="d-block w-100" alt="5R" height="600" style="object-fit: cover; object-position: center;">
            <span class="mask bg-darkslategray opacity-6"></span>
            <div class="carousel-caption d-none d-md-block">
                <h2>5R DEPARTEMEN PENGADAAN JASA</h2>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/carousel-2.jpg')}}" class="d-block w-100" alt="..." height="600" style="object-fit: cover; object-position: center;">
            <span class="mask bg-darkslategray opacity-6"></span>
            <div class="carousel-caption d-none d-md-block">
                <h2>5R DEPARTEMEN PENGADAAN JASA</h2>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/carousel-3.jpg')}}" class="d-block w-100" alt="..." height="600" style="object-fit: cover; object-position: center;">
            <span class="mask bg-darkslategray opacity-6"></span>
            <div class="carousel-caption d-none d-md-block">
                <h2>5R DEPARTEMEN PENGADAAN JASA</h2>
            </div>
        </div>
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
<!-- End Carousel -->

<!-- Informasi 5R -->
<div class="container-fluid p-sm-2 p-md-5" style="background-image: url('img/pattern-round.png');">
    <div class="information pt-4 pb-4">
        <div class="text-center mb-5">
            <h3>Budaya Kerja 5R</h3>
            <h6 class="text-secondary">Ringkas, Rapi, Resik, Rawat, Rajin</h6>
        </div>
        <div class="row justify-content-evenly align-items-center px-3">
            <div class="col-sm-12 col-md-2 text-center">
                <img src="{{asset('img/ringkas.png')}}" height="150" class="text-center mb-2">
                <h6>RINGKAS</h6>
                <p>Singkirkan atau buang barang yang tidak diperlukan.</p>
            </div>
            <div class="col-sm-12 col-md-2 text-center">
                <img src="{{asset('img/rapi.png')}}" height="150" class="text-center mb-2">
                <h6>RAPI</h6>
                <p>Letakkan segala sesuatu sesuai tempat dan fungsinya sejak awal.</p>
            </div>
            <div class="col-sm-12 col-md-2 text-center">
                <img src="{{asset('img/resik.png')}}" height="150" class="text-center mb-2">
                <h6>RESIK</h6>
                <p>Bersihkan meja kerja dan sekitarnya dari kotoran atau sampah.</p>
            </div>
            <div class="col-sm-12 col-md-2 text-center">
                <img src="{{asset('img/rawat.png')}}" height="150" class="text-center mb-2">
                <h6>RAWAT</h6>
                <p>Pertahankan kerapian dan kebersihan meja kerja dan sekitarnya.</p>
            </div>
            <div class="col-sm-12 col-md-2 text-center">
                <img src="{{asset('img/rajin.png')}}" height="150" class="text-center mb-2">
                <h6>RAJIN</h6>
                <p>Jadikan kerapihan dan kebersihan sebagai sebuah budaya di tempat kerja.</p>
            </div>
        </div>
    </div>
</div>
<!-- End Informasi 5R -->

<!-- Marquee -->
<div class="bg-darkslategray text-center">
    <marquee width="80%" height="30%" direction="left" style="background-color: darkslategray;">
        <span class="text-khaki">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT Petrokimia Gresik</span>
        <span class="text-khaki">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT Petrokimia Gresik</span>
        <span class="text-khaki">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT Petrokimia Gresik</span>
        <span class="text-khaki">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT Petrokimia Gresik</span>
        <span class="text-khaki">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT Petrokimia Gresik</span>
    </marquee>
</div>
<!-- End Marquee -->

<!-- Video & Kontak 5R -->
<div class="container-fluid p-5">
    <div class="row justify-content-center align-items-center gy-4">
        <div class="col-sm-12 col-md-7">
            <video id="vid" width="100%" height="auto" muted controls autoplay loop>
                <source src="video-upload/video-1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="col-sm-12 col-md-5 text-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <div class="mb-5">
                        <h3>Temukan Kami</h3>
                    </div>
                    <div class="row justify-content-around mb-5">
                        <!-- <div class="col-2">
                            <a href="#"><i class="fab fa-2x fa-facebook"></i></a>
                        </div>
                        <div class="col-2">
                            <a href="#"><i class="fab fa-2x fa-youtube"></i></a>
                        </div> -->
                        <div class="col-2">
                            <a href="https://www.instagram.com/5rdjfresh/?next=%2F&hl=ms" target="_blank"><i class="fab fa-2x fa-instagram"></i></a>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.732064854226!2d112.63789371461553!3d-7.156944672203771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8010a1dbf4279%3A0x24ee6767535bf9a6!2sPT.%20Petrokimia%20Gresik!5e0!3m2!1sen!2sid!4v1672839274589!5m2!1sen!2sid" width="75%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Video & Kontak 5R -->

<!-- Marquee -->
<div class="bg-darkslategray text-center">
    <marquee width="80%" height="30%" direction="left" style="background-color: darkslategray;">
        <span class="text-khaki">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT Petrokimia Gresik</span>
        <span class="text-khaki">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT Petrokimia Gresik</span>
        <span class="text-khaki">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT Petrokimia Gresik</span>
        <span class="text-khaki">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT Petrokimia Gresik</span>
        <span class="text-khaki">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT Petrokimia Gresik</span>
    </marquee>
</div>
<!-- End Marquee -->

<!-- Related Link -->
<div class="bg-light p-5">
    <div class="row gy-4">
        <div class="col-sm-4">
            <a href="https://petrokimia-gresik.com/" target="_blank">
                <div class="card text-center border-0" style="height: 120px;">
                    <div class="card-body">
                        <span class="helper"></span>
                        <img src="{{asset('img/petro-logo.png')}}" height="60">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="https://www.pupuk-indonesia.com/" target="_blank">
                <div class="card text-center border-0" style="height: 120px;">
                    <div class="card-body">
                        <span class="helper"></span>
                        <img src="{{asset('img/pi-logo.png')}}" height="60">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="https://bumn.go.id/" target="_blank">
                <div class="card text-center border-0" style="height: 120px;">
                    <div class="card-body">
                        <span class="helper"></span>
                        <img src="{{asset('img/bumn-logo.png')}}" height="30">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="https://eprocurement.pupuk-indonesia.com/beranda" target="_blank">
                <div class="card text-center border-0" style="height: 120px;">
                    <div class="card-body">
                        <span class="helper"></span>
                        <img src="{{asset('img/eproc.png')}}" height="30">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="http://sips.petrokimia-gresik.com/login" target="_blank">
                <div class="card text-center border-0" style="height: 120px;">
                    <div class="card-body">
                        <span class="helper"></span>
                        <img src="{{asset('img/sips.jpg')}}" height="60">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="https://sihasan-petrokimia.site/" target="_blank">
                <div class="card text-center border-0" style="height: 120px;">
                    <div class="card-body">
                        <span class="helper"></span>
                        <img src="{{asset('img/sihasan.png')}}" height="60">
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- End Related Link -->

<!-- Pesan & Kesan -->
<div class="bg-khaki p-5" style="font-family: Sora;">
    <div class="row justify-content-between align-items-center gy-3">
        <div class="col-sm-12 col-md-8">
            <h4 class="my-0">Sampaikan Pesan & Kesan Anda kepada Kami</h4>
            <h6 class="my-0">Pesan & Kesan yang Anda Sampaikan akan Sangat Bermanfaat bagi Kami</h6>
        </div>
        <div class="col-sm-12 col-md-4 text-md-end">
            <a href="{{route('pesan')}}#form-content" class="btn px-5 py-3 bg-darkslategray"><i class="fas fa-envelope"></i> Formulir</a>
        </div>
    </div>
</div>
<!-- End Pesan & Kesan -->
@endsection