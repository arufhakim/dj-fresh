@extends('layouts.landing-master')
@section('body')
<style>
    .checked {
        color: orange;
    }
</style>
<div class="container-fluid p-5">
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <div class="card border-0 mb-5">
                <div class="card-header border-0 bg-white">
                    <h5><b>PESAN & KESAN</b></h5>
                </div>
                <ul class="list-group list-group-flush ps-3">
                    <a class="text-decoration-none text-white" id="video" href="#video-content">
                        <li class="list-group-item border-0 video" style="font-size: 16px;">Video</li>
                    </a>
                    <a class="text-decoration-none text-white" id="pesan" href="#pesan-content">
                        <li class="list-group-item border-0 pesan" style="font-size: 16px;">Pesan & Kesan</li>
                    </a>
                    <a class="text-decoration-none text-white" id="form" href="#form-content">
                        <li class="list-group-item border-0 form" style="font-size: 16px;">Formulir Pesan & Kesan</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div id="video-content" class="content mb-5">
                <h2 class="mb-2"><b>Video</b></h2>
                <p style="text-align: justify;">Video Pesan & Kesan Departemen Pengadaan Jasa.</p>
                <video id="vid" width="100%" height="auto" muted controls autoplay loop>
                    <source src="video-upload/video-default.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <p class="text-secondary"><i>updated-at: 05-01-2023</i></p>
            </div>
            <div id="pesan-content" class="content mb-5">
                <h2 class="mb-2"><b>Pesan & Kesan</b></h2>
                <p style="text-align: justify;">Pesan & Kesan Departemen Pengadaan Jasa.</p>
                <livewire:pesan-component />
            </div>
            <div id="form-content" class="content mb-5">
                <h2 class="mb-2"><b>Formulir Pesan & Kesan</b></h2>
                <p style="text-align: justify;">Pesan & Kesan yang Anda Sampaikan akan Sangat Bermanfaat bagi Kami</p>

                <div class="card">
                    <div class="card-body">
                        <form action="{{route('testimoni.store')}}" method="POST" autocomplete="off">
                            @csrf
                            <h4 class="text-center mb-2 mt-3">Pesan & Kesan</h4>
                            <div class="form-group row">
                                <div class="col mb-2">
                                    <div class="rate ps-0">
                                        <input type="radio" id="star5" class="rate" name="nilai" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" checked id="star4" class="rate" name="nilai" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" class="rate" name="nilai" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" class="rate" name="nilai" value="2">
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" class="rate" name="nilai" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <input class="form-control" type="text" id="nama" name="nama" placeholder="Nama/Instansi">
                                </div>
                                @error('nama')
                                <div class="invalid-feedback mt-0">
                                    <small>{{ $message }}</small>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col">
                                    <textarea class="form-control" name="ulasan" rows="6" placeholder="Ulasan" maxlength="50"></textarea>
                                </div>
                            </div>
                            <div class="mt-3 text-end">
                                <button class="btn btn-sm btn-success">Submit</button>
                            </div>
                        </form>
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
        $("#video").click(function() {
            $(".video").addClass("active");
            $(".pesan").removeClass("active");
            $(".form").removeClass("active");
        });
    })
</script>
<script>
    $(document).ready(function() {
        $("#pesan").click(function() {
            $(".pesan").addClass("active");
            $(".video").removeClass("active");
            $(".form").removeClass("active");
        });
    })
</script>

<script>
    $(document).ready(function() {
        $("#form").click(function() {
            $(".form").addClass("active");
            $(".video").removeClass("active");
            $(".pesan").removeClass("active");

        });
    })
</script>
@endpush