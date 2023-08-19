<div>
    <!-- Nitrea -->
    <div class="col-md-12">
        <div class="card mb-2">
            <div class="card-header pb-0 pt-2 bg-forestgreen">
                <h6 class="text-center khaki text-uppercase">Ruang Nitrea</h6>
            </div>
            <div class="card-body px-0 pt-0">
                <div class="table-responsive custom-table px-4 overflow-hidden" wire:poll>
                    <table class="table table-overflow-hidden table-sm align-items-center justify-content-center">
                        <thead>
                            <tr>
                                <th class="text-center text-secondary text-uppercase font-weight-bolder text-xxs" style="width: 25%;">Pengguna</th>
                                <th class="text-center text-secondary text-uppercase font-weight-bolder text-xxs" style="width: 20%;">Tanggal</th>
                                <th class="text-center text-secondary text-uppercase font-weight-bolder text-xxs" style="width: 15%;">Pukul</th>
                                <th class="text-center text-secondary text-uppercase font-weight-bolder text-xxs" style="width: 25%;">Agenda Ruang Rapat</th>
                                <th class="text-center text-secondary text-uppercase font-weight-bolder text-xxs" style="width: 15%;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($nitrea as $big)
                            <tr>
                                <td class="align-middle">
                                    <span class="text-xs forestgreen font-weight-bold">{{$big->pengguna}}</span>
                                </td>
                                @if(date_parse($big->tanggal) == date_parse(Carbon\Carbon::now()->toDateString()))
                                <td class="align-middle text-center bg-khaki">
                                    <span class="text-xs forestgreen font-weight-bold">{{date('d F Y', strtotime($big->tanggal))}}</span>
                                </td>
                                @else
                                <td class="align-middle text-center">
                                    <span class="text-xs forestgreen font-weight-bold">{{date('d F Y', strtotime($big->tanggal))}}</span>
                                </td>
                                @endif
                                <td class="align-middle text-center">
                                    <span class="text-xs forestgreen font-weight-bold">{{date("H:i", strtotime($big->waktu_mulai))}} - {{date("H:i", strtotime($big->waktu_selesai))}}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs forestgreen font-weight-bold">{{$big->keterangan}}</span>
                                </td>
                                @if(date_parse($big->tanggal) == date_parse(Carbon\Carbon::now()->toDateString()))
                                @if($big->waktu_mulai > Carbon\Carbon::now()->toTimeString())
                                <td class="align-middle text-center">
                                    <span class="badge badge-xs text-xxs text-uppercase px-2 py-1 bg-gradient-danger">Soon</span>
                                </td>
                                @elseif($big->waktu_mulai < Carbon\Carbon::now()->toTimeString() && $big->waktu_selesai > Carbon\Carbon::now()->toTimeString())
                                    <td class="align-middle text-center">
                                        <span class="badge badge-xs text-xxs text-uppercase px-2 py-1 bg-gradient-warning">Progress</span>
                                    </td>
                                    @else
                                    <td class="align-middle text-center">
                                        <span class="badge badge-xs text-xxs text-uppercase px-2 py-1 bg-gradient-success">Done</span>
                                    </td>
                                    @endif
                                    @else
                                    <td class="align-middle text-center">
                                    </td>
                                    @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Nitrea -->

    <!-- Niphos -->
    <div class="col-md-12">
        <div class="card mb-2">
            <div class="card-header pb-0 pt-2 bg-forestgreen">
                <h6 class="text-center khaki text-uppercase">Ruang Niphos</h6>
            </div>
            <div class="card-body px-0 pt-0">
                <div class="table-responsive custom-table px-4 overflow-hidden" wire:poll>
                    <table class="table table-overflow-hidden table-sm align-items-center justify-content-center">
                        <thead>
                            <tr>
                                <th class="text-center text-secondary text-uppercase font-weight-bolder text-xxs" style="width: 25%;">Pengguna</th>
                                <th class="text-center text-secondary text-uppercase font-weight-bolder text-xxs" style="width: 20%;">Tanggal</th>
                                <th class="text-center text-secondary text-uppercase font-weight-bolder text-xxs" style="width: 15%;">Pukul</th>
                                <th class="text-center text-secondary text-uppercase font-weight-bolder text-xxs" style="width: 25%;">Agenda Ruang Rapat</th>
                                <th class="text-center text-secondary text-uppercase font-weight-bolder text-xxs" style="width: 15%;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($niphos as $small)
                            <tr>
                                <td class="align-middle">
                                    <span class="text-xs forestgreen font-weight-bold">{{$small->pengguna}}</span>
                                </td>
                                @if(date_parse($small->tanggal) == date_parse(Carbon\Carbon::now()->toDateString()))
                                <td class="align-middle text-center bg-khaki">
                                    <span class="text-xs forestgreen font-weight-bold">{{date('d F Y', strtotime($small->tanggal))}}</span>
                                </td>
                                @else
                                <td class="align-middle text-center">
                                    <span class="text-xs forestgreen font-weight-bold">{{date('d F Y', strtotime($small->tanggal))}}</span>
                                </td>
                                @endif
                                <td class="align-middle text-center">
                                    <span class="text-xs forestgreen font-weight-bold">{{date("H:i", strtotime($small->waktu_mulai))}} - {{date("H:i", strtotime($small->waktu_selesai))}}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-xs forestgreen font-weight-bold">{{$small->keterangan}}</span>
                                </td>
                                @if(date_parse($small->tanggal) == date_parse(Carbon\Carbon::now()->toDateString()))
                                @if($small->waktu_mulai > Carbon\Carbon::now()->toTimeString())
                                <td class="align-middle text-center">
                                    <span class="badge badge-xs text-xxs text-uppercase px-2 py-1 bg-gradient-danger">Soon</span>
                                </td>
                                @elseif($small->waktu_mulai < Carbon\Carbon::now()->toTimeString() && $small->waktu_selesai > Carbon\Carbon::now()->toTimeString())
                                    <td class="align-middle text-center">
                                        <span class="badge badge-xs text-xxs text-uppercase px-2 py-1 bg-gradient-warning">Progress</span>
                                    </td>
                                    @else
                                    <td class="align-middle text-center">
                                        <span class="badge badge-xs text-xxs text-uppercase px-2 py-1 bg-gradient-success">Done</span>
                                    </td>
                                    @endif
                                    @else
                                    <td class="align-middle text-center">
                                    </td>
                                    @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Niphos -->
</div>