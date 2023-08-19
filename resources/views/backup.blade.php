<!-- Informasi -->
<div class="col-md-10">
    <div class="card mt-4">
        <div class="card-header pb-0 p-3 tbg-forestgreen">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h6 class="mb-0 text-white text-uppercase">Informasi</h6>
                </div>
                <div class="col-6 text-end">
                </div>
            </div>
        </div>
        <div class="card-body tbg-forestgreen p-3 custom-rounded-bottom">
            <div class="row">
                @foreach($informasi as $berita)
                <div class="col-md-6 mb-2 py-0">
                    <div class="card card-body border card-plain custom-rounded-bottom d-flex align-items-center flex-col py-1 px-1 mb-2">
                        <span class="text-xs text-white font-weight-bold">{{$berita->informasi}}</span>
                        <span class="text-xxs text-white">{{date('d F Y', strtotime($berita->created_at))}}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End Informasi -->