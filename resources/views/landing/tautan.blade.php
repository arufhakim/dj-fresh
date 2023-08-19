@extends('layouts.landing-master')

@section('body')
<div class="container-fluid p-5">
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <div class="card border-0 mb-5">
                <div class="card-header border-0 bg-white">
                    <h5><b>TAUTAN</b></h5>
                </div>
                <ul class="list-group list-group-flush ps-3">
                    <a class="text-decoration-none text-white" id="medsos" href="#medsos-content">
                        <li class="list-group-item border-0 medsos" style="font-size: 16px;">Media Sosial</li>
                    </a>
                    <a class="text-decoration-none text-white" id="website" href="#website-content">
                        <li class="list-group-item border-0 website" style="font-size: 16px;">Website Terkait</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div id="medsos-content" class="content mb-5">
                <h2 class="mb-2"><b>Media Sosial</b></h2>
                <p style="text-align: justify;">Media Sosial Departemen Pengadaan Jasa.</p>
                <div class="row align-items-center">
                    <div class="col-auto text-center"><a class="text-decoration-none" href="https://www.instagram.com/5rdjfresh/?next=%2F&hl=ms" target="_blank"><i class="fab fa-3x fa-instagram"></i></a></div>
                    <div class="col-auto"><a class="text-decoration-none" href="https://www.instagram.com/5rdjfresh/?next=%2F&hl=ms" target="_blank">https://www.instagram.com/5rdjfresh</a></div>
                </div>
            </div>
            <div id="website-content" class="content mb-5">
                <h2 class="mb-2"><b>Website Terkait</b></h2>
                <p style="text-align: justify;">Website Terkait Departemen Pengadaan Jasa.</p>
                <div class="row gy-4">
                    <div class="col-sm-4">
                        <a href="https://petrokimia-gresik.com/" target="_blank">
                            <div class="card text-center" style="height: 120px;">
                                <div class="card-body">
                                    <span class="helper"></span>
                                    <img src="{{asset('img/petro-logo.png')}}" height="60">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://www.pupuk-indonesia.com/" target="_blank">
                            <div class="card text-center" style="height: 120px;">
                                <div class="card-body">
                                    <span class="helper"></span>
                                    <img src="{{asset('img/pi-logo.png')}}" height="60">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://bumn.go.id/" target="_blank">
                            <div class="card text-center" style="height: 120px;">
                                <div class="card-body">
                                    <span class="helper"></span>
                                    <img src="{{asset('img/bumn-logo.png')}}" height="30">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://eprocurement.pupuk-indonesia.com/beranda" target="_blank">
                            <div class="card text-center" style="height: 120px;">
                                <div class="card-body">
                                    <span class="helper"></span>
                                    <img src="{{asset('img/eproc.png')}}" height="30">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="http://sips.petrokimia-gresik.com/login" target="_blank">
                            <div class="card text-center" style="height: 120px;">
                                <div class="card-body">
                                    <span class="helper"></span>
                                    <img src="{{asset('img/sips.jpg')}}" height="60">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://sihasan-petrokimia.site/" target="_blank">
                            <div class="card text-center" style="height: 120px;">
                                <div class="card-body">
                                    <span class="helper"></span>
                                    <img src="{{asset('img/sihasan.png')}}" height="60">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
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
        $("#medsos").click(function() {
            $(".medsos").addClass("active");
            $(".website").removeClass("active");
        });
    })
</script>
<script>
    $(document).ready(function() {
        $("#website").click(function() {
            $(".website").addClass("active");
            $(".medsos").removeClass("active");
        });
    })
</script>
@endpush