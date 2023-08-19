<div>
    <div class="sort-item mb-4">
        <select name="sortBy" class="chosen form-control form-control-sm" wire:model="sortBy" style="width: 17%;">
            <option value="default" selected="selected">Semua Bintang</option>
            <option value="1">1 Bintang</option>
            <option value="2">2 Bintang</option>
            <option value="3">3 Bintang</option>
            <option value="4">4 Bintang</option>
            <option value="5">5 Bintang</option>
        </select>
    </div>
    <div class="row">
        @foreach($testimoni as $ulasan)
        <div class="col-sm-6 col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 12px; font-weight:bold;">{{$ulasan->nama}}</h5>
                    @if($ulasan->nilai === "1")
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    @elseif($ulasan->nilai === "2")
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    @elseif($ulasan->nilai === "3")
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    @elseif($ulasan->nilai === "4")
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    @elseif($ulasan->nilai === "5")
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    @else
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    @endif
                    <p class="card-text mt-2" style="font-size: 12px;">{{$ulasan->ulasan}}</p>
                    <p class="card-text text-secondary" style="font-size: 10px;"><i>{{date('d-m-Y H:i:s', strtotime($ulasan->created_at))}}</i></p>
                </div>
            </div>
        </div>
        @endforeach
        {{ $testimoni->links() }}
    </div>
</div>