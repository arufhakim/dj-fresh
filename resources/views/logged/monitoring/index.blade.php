@extends('layouts.master')
@section('page-title', 'Papan Monitoring')
@section('active-monitoring', 'active')
@section('address')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page"><a class="text-white"
                href="{{ route('monitoring.index') }}">Papan Monitoring</a></li>
    </ol>
@endsection
@section('body')
    <div class="card mb-4">
        <div class="card-header bg-khaki pb-0">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h6 class="mb-0">Papan Monitoring</h6>
                </div>
                <div class="col-6 text-end">
                    <a class="btn btn-xs btn-primary mb-0" href="{{ route('monitoring.create') }}"><i
                            class="fas fa-plus"></i>&nbsp;&nbsp;Tambah</a>
                </div>
            </div>
        </div>
        <div class="card-body bg-khaki custom-rounded-bottom">
            <div class="card">
                <form action="{{ route('monitoring.index') }}" method="GET">
                    <div class="row justify-content-center align-items-center mt-5">
                        <div class="col-3">
                            <div class="form-group">
                                <input class="form-control form-control-sm" type="date" id="start" name="start"
                                    value="{{ $start }}" required>
                            </div>
                        </div>
                        <div class="col-auto">
                            <p class="text-xs forestgreen font-weight-bold">s.d.</p>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <input class="form-control form-control-sm" type="date" id="end" name="end"
                                    value="{{ $end }}" required>
                            </div>
                        </div>
                        <div class="col-1">
                            <button type="submit" class="btn btn-success btn-sm py-2 px-3"
                                style="line-height: 17px;">Submit</button>
                        </div>
                    </div>
                </form>
                <div class="table-responsive p-4">
                    <table id="table" class="table align-items-center mb-4 datatable">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center"
                                    style="width: 5%;">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center"
                                    style="width: 20%;">Area</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center"
                                    style="width: 15%;">PIC</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center"
                                    style="width: 15%;">Auditor</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center"
                                    style="width: 10%;">Kondisi</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center"
                                    style="width: 10%;">Tanggal</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center"
                                    style="width: 15%;">Keterangan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center"
                                    style="width: 10%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($monitoring as $monitor)
                                <tr>
                                    <td class="align-middle text-center">
                                        <span class="text-xs forestgreen font-weight-bold">{{ $loop->iteration }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <span class="text-xs forestgreen font-weight-bold">{{ $monitor->area }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <span class="text-xs forestgreen font-weight-bold">{{ $monitor->pic }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <span class="text-xs forestgreen font-weight-bold">{{ $monitor->auditor }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        @if ($monitor->kondisi == 'Baik')
                                            <span
                                                class="badge badge-xs text-xxs text-uppercase px-2 py-1 bg-gradient-success">Baik</span>
                                        @elseif($monitor->kondisi == 'Cukup')
                                            <span
                                                class="badge badge-xs text-xxs text-uppercase px-2 py-1 bg-gradient-warning">Cukup</span>
                                        @elseif($monitor->kondisi == 'Kurang')
                                            <span
                                                class="badge badge-xs text-xxs text-uppercase px-2 py-1 bg-gradient-danger">Kurang</span>
                                        @else
                                            <span></span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center">
                                        <span
                                            class="text-xs forestgreen font-weight-bold">{{ date('d F Y', strtotime($monitor->tanggal)) }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <span
                                            class="text-xs forestgreen font-weight-bold">{{ $monitor->keterangan }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <form action="{{ route('monitoring.destroy', ['monitoring' => $monitor->id]) }}"
                                            method="POST" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-link text-danger text-gradient py-0 px-1 my-0 show_confirm"
                                                data-toggle="confirmation" data-placement="left"><i
                                                    class="far fa-trash-alt"></i></button>
                                        </form>
                                        <a class="btn btn-link text-dark py-0 px-1 my-0"
                                            href="{{ route('monitoring.edit', ['monitoring' => $monitor->id]) }}"><i
                                                class="fas fa-pencil-alt text-dark" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Area</th>
                                <th>PIC</th>
                                <th>Auditor</th>
                                <th>Kondisi</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
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
                    pageLength: 25,
                    initComplete: function() {
                        this.api().columns([0, 1, 2, 3, 4, 5, 6]).every(function() {
                            var that = this;

                            $('input', this.footer()).on('keyup change clear',
                            function() {
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
