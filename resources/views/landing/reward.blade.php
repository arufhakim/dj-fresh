@extends('layouts.landing-master')

@section('body')
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="card border-0 mb-5">
                    <div class="card-header border-0 bg-white">
                        <h5><b>REWARDING</b></h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="content mb-5">
                    <h2 class="mb-2"><b>Rewarding</b></h2>
                    <p style="text-align: justify;">Individu dengan Nilai Tertinggi dan Terendah Bulan
                        <b>{{ $bulan }}</b> Departemen Pengadaan Jasa.
                    </p>
                    <div class="row g-4">
                        <div class="col-sm-6 col-md-12 col-lg-6">
                            <h5 class="text-center mb-3"><b>TERTINGGI</b></h5>
                            @if(isset($highest->nama))
                            <div class="card mb-3">
                                <div class="row align-items-center g-0">
                                    <div class="col-md-4 text-center">
                                        <img src="/image-upload/{{ $highest->foto }}" class="img-fluid rounded-start"
                                            alt="highest"
                                            style="object-fit: cover; object-position: center;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="text-darkslategray"><b>{{ $highest->nama }}</b></h5>
                                            <table>
                                                <tr>
                                                    <td>Kebersihan</td>
                                                    <td class="text-center ps-1">:</td>
                                                    <td class="text-end ps-2"> {{ $highest->kebersihan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kerapihan</td>
                                                    <td class="text-center ps-1">:</td>
                                                    <td class="text-end ps-2"> {{ $highest->kerapihan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggungjawab</td>
                                                    <td class="text-center ps-1">:</td>
                                                    <td class="text-end ps-2"> {{ $highest->tanggungjawab }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Total</b></td>
                                                    <td class="text-center ps-1"><b>:</b></td>
                                                    <td class="text-end ps-2"><b>{{ $highest->score }}</b></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <h6 class="text-center">Belum ada data</h6>
                            @endif
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-6">
                            <h5 class="text-center mb-3"><b>TERENDAH</b></h5>
                            @if(isset($lowest->nama))
                            <div class="card mb-3">
                                <div class="row align-items-center g-0">
                                    <div class="col-md-4 text-center">
                                        <img src="/image-upload/{{ $lowest->foto }}" class="img-fluid rounded-start"
                                            alt="lowest"
                                            style="object-fit: fill; object-position: center;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="text-darkslategray"><b>{{ $lowest->nama }}</b></h5>
                                            <table>
                                                <tr>
                                                    <td>Kebersihan</td>
                                                    <td class="text-center ps-1">:</td>
                                                    <td class="text-end ps-2"> {{ $lowest->kebersihan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kerapihan</td>
                                                    <td class="text-center ps-1">:</td>
                                                    <td class="text-end ps-2"> {{ $lowest->kerapihan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggungjawab</td>
                                                    <td class="text-center ps-1">:</td>
                                                    <td class="text-end ps-2"> {{ $lowest->tanggungjawab }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Total</b></td>
                                                    <td class="text-center ps-1"><b>:</b></td>
                                                    <td class="text-end ps-2"><b>{{ $lowest->score }}</b></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <h6 class="text-center">Belum ada data</h6>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Marquee -->
    <div class="bg-khaki text-center">
        <marquee width="80%" height="30%" direction="left" style="background-color: khaki;">
            <span class="text-darkslategray">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT
                Petrokimia Gresik</span>
            <span class="text-darkslategray">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT
                Petrokimia Gresik</span>
            <span class="text-darkslategray">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT
                Petrokimia Gresik</span>
            <span class="text-darkslategray">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT
                Petrokimia Gresik</span>
            <span class="text-darkslategray">5R Departemen Pengadaan Jasa</span><span class="text-white me-5"> - PT
                Petrokimia Gresik</span>
        </marquee>
    </div>
    <!-- End Marquee -->
@endsection
