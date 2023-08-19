@extends('layouts.landing-master')

@section('body')
<div class="container-fluid p-5">
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <div class="card border-0 mb-5">
                <div class="card-header border-0 bg-white">
                    <h5><b>MONITORING 5R</b></h5>
                </div>
                <ul class="list-group list-group-flush ps-3">
                    <a class="text-decoration-none text-white" id="monitor" href="#monitor-content">
                        <li class="list-group-item border-0 monitor" style="font-size: 16px;">Monitoring 5R</li>
                    </a>
                    <a class="text-decoration-none text-white" id="galeri" href="#galeri-content">
                        <li class="list-group-item border-0 galeri" style="font-size: 16px;">Galeri 5R</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="col-sm-12 col-md-7">
            <livewire:monitoring-component />
            <div id="galeri-content" class="content mb-5">
                <h2 class="mb-2"><b>Galeri 5R</b></h2>
                <p style="text-align: justify;">Galeri 5R Departemen Pengadaan Jasa.</p>
                <div class="row justify-content-between text-center gy-4">
                    @foreach($gambar as $img)
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <img class="card-img-top" src="image-upload/{{$img->gambar}}" height="220" alt="Card image cap" alt="..." style="object-fit: cover; object-position: center;">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 18px;">{{$img->nama}}</h5>
                                <p class="card-text text-secondary" style="font-size: 12px;"><i>updated-at: {{date('d-m-Y', strtotime($img->updated_at))}}</i></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
        $("#monitor").click(function() {
            $(".monitor").addClass("active");
            $(".galeri").removeClass("active");
        });
    })
</script>
<script>
    $(document).ready(function() {
        $("#galeri").click(function() {
            $(".galeri").addClass("active");
            $(".monitor").removeClass("active");
        });
    })
</script>
@endpush