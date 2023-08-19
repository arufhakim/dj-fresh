@extends('layouts.landing-master')

@section('body')
<div class="container-fluid p-5">
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <div class="card border-0 mb-5">
                <div class="card-header border-0 bg-white">
                    <h5><b>PROFIL</b></h5>
                </div>
                <ul class="list-group list-group-flush ps-3">
                    <a class="text-decoration-none text-white" id="susunan" href="#susunan-content">
                        <li class="list-group-item border-0 susunan" style="font-size: 16px;">Susunan Pengurus</li>
                    </a>
                    <a class="text-decoration-none text-white" id="denah" href="#denah-content">
                        <li class="list-group-item border-0 denah" style="font-size: 16px;">Denah</li>
                    </a>
                    <a class="text-decoration-none text-white" id="komitmen" href="#komitmen-content">
                        <li class="list-group-item border-0 komitmen" style="font-size: 16px;">Komitmen 5R</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div id="susunan-content" class="content mb-5">
                <h2 class="mb-2"><b>Susunan Pengurus</b></h2>
                <p style="text-align: justify;">Susunan Pengurus Departemen Pengadaan Jasa.</p>
                <img src="{{asset('img/susunan.jpg')}}" width="100%" height="auto" class="text-center">
                <p class="text-secondary"><i>updated-at: 05-01-2023</i></p>
            </div>
            <div id="denah-content" class="content mb-5">
                <h2 class="mb-2"><b>Denah</b></h2>
                <p style="text-align: justify;">Denah Ruangan Departemen Pengadaan Jasa.</p>
                <img src="{{asset('img/denah.jpg')}}" width="100%" height="auto" class="text-center">
                <p class="text-secondary"><i>updated-at: 05-01-2023</i></p>
            </div>
            <div id="komitmen-content" class="content mb-5">
                <h2 class="mb-2"><b>Komitmen 5R</b></h2>
                <p style="text-align: justify;">Dalam rangka mewujudkan dan mendukung pelaksanaan kegiatan 5R di Departemen Pengadaan Jasa sebagai upaya menghadirkan tempat kerja yang bersih, sehat, nyaman, dan aman, maka dibuat komitmen personil Departemen Pengadaan Jasa pada lampiran berikut.</p>
                <img src="{{asset('img/komitmen.jpg')}}" width="100%" height="auto" class="text-center">
                <p class="text-secondary"><i>updated-at: 05-01-2023</i></p>
            </div>
        </div>
    </div>
</div>
<!-- Marquee -->
<div class="bg-khaki text-center">
    <marquee width="80%" height="30%" direction="left" style="background-color: khaki;">
        <span class="text-darkslategray">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT Petrokimia Gresik</span>
        <span class="text-darkslategray">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT Petrokimia Gresik</span>
        <span class="text-darkslategray">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT Petrokimia Gresik</span>
        <span class="text-darkslategray">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT Petrokimia Gresik</span>
        <span class="text-darkslategray">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT Petrokimia Gresik</span>
    </marquee>
</div>
<!-- End Marquee -->
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $("#susunan").click(function() {
            $(".susunan").addClass("active");
            $(".denah").removeClass("active");
            $(".komitmen").removeClass("active");
        });
    })
</script>
<script>
    $(document).ready(function() {
        $("#denah").click(function() {
            $(".denah").addClass("active");
            $(".susunan").removeClass("active");
            $(".komitmen").removeClass("active");
        });
    })
</script>

<script>
    $(document).ready(function() {
        $("#komitmen").click(function() {
            $(".komitmen").addClass("active");
            $(".susunan").removeClass("active");
            $(".denah").removeClass("active");

        });
    })
</script>
@endpush