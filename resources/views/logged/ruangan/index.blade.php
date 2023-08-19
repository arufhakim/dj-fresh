@extends('layouts.master')
@section('page-title', 'Ruangan')
@section('active-ruangan','active')
@section('address')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page"><a class="text-white" href="{{route('ruangan.index')}}">Ruangan</a></li>
</ol>
@endsection
@push('styles')
<style>
    .dataTables_scrollBody {
        overflow-x: hidden !important;
        overflow-y: auto !important;
    }
</style>
@endpush
@section('body')
<div class="card mb-4">
    <div class="card-header bg-khaki pb-0">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6 class="mb-0">Ruang Nitrea</h6>
            </div>
            <div class="col-6 text-end">
                <a class="btn btn-xs btn-primary mb-0" href="{{route('ruangan.create')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah</a>
            </div>
        </div>
    </div>
    <div class="card-body bg-khaki custom-rounded-bottom">
        <div class="card">
            <div class="table-responsive p-4">
                <table id="table" class="table align-items-center mb-4 datatable" style="table-layout: fixed !important; width:100% !important; overflow-x:hidden !important;">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 5%;">No</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 20%;">Pengguna</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 15%;">Tanggal</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 15%;">Waktu</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 25%;">Agenda</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 10%;">Status</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 10%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($nitrea as $big)
                        <tr>
                            <td class="align-middle text-center">
                                <span class="text-xs forestgreen font-weight-bold">{{$loop->iteration}}</span>
                            </td>
                            <td class="align-middle text-center">
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
                                <td class="align-middle text-center">
                                    <form action="{{route('ruangan.destroy', ['ruangan' => $big->id])}}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link text-danger text-gradient py-0 px-1 my-0 show_confirm"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                    <a class="btn btn-link text-dark py-0 px-1 my-0" href="{{route('ruangan.edit', ['ruangan' => $big->id])}}"><i class="fas fa-pencil-alt text-dark" aria-hidden="true"></i></a>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Pengguna</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Agenda</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header bg-khaki pb-0">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6 class="mb-0">Ruang Niphos</h6>
            </div>
            <div class="col-6 text-end">
                <a class="btn btn-xs btn-primary mb-0" href="{{route('ruangan.create')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah</a>
            </div>
        </div>
    </div>
    <div class="card-body bg-khaki custom-rounded-bottom">
        <div class="card">
            <div class="table-responsive p-4">
                <table id="table" class="table align-items-center mb-4 datatable">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 5%;">No</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 20%;">Pengguna</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 15%;">Tanggal</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 15%;">Waktu</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 25%;">Agenda</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 10%;">Status</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 10%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($niphos as $small)
                        <tr>
                            <td class="align-middle text-center">
                                <span class="text-xs forestgreen font-weight-bold">{{$loop->iteration}}</span>
                            </td>
                            <td class="align-middle text-center">
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
                                <td class="align-middle text-center">
                                    <form action="{{route('ruangan.destroy', ['ruangan' => $small->id])}}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link text-danger text-gradient py-0 px-1 my-0 show_confirm"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                    <a class="btn btn-link text-dark py-0 px-1 my-0" href="{{route('ruangan.edit', ['ruangan' => $small->id])}}"><i class="fas fa-pencil-alt text-dark" aria-hidden="true"></i></a>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Pengguna</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Agenda</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script type="text/javascript">
    // DataTable
    $(function() {
        $('#table tfoot th').each(function() {
            var title = $(this).text();
            $(this).html('<input type="text"  class="form-control" placeholder="" />');
        });
        $(document).ready(function() {
            $('.datatable').DataTable({
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    ['10', '25', '50', '100', 'All']
                ],
                scrollX: true,
                scrollY: '300px',
                scrollCollapse: true,
                pageLength: 25,
                initComplete: function() {
                    this.api().columns([0, 1, 2, 3, 4, 5]).every(function() {
                        var that = this;

                        $('input', this.footer()).on('keyup change clear', function() {
                            if (that.search() !== this.value) {
                                that
                                    .search(this.value)
                                    .draw();
                            }
                        });
                    });
                },
            });
        });
    });
</script>
@endpush