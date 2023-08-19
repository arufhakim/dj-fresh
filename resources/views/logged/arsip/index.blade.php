@extends('layouts.master')
@section('page-title', 'Dokumen Arsip')
@section('active-arsip','active')
@section('address')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page"><a class="text-white" href="{{route('arsip.index')}}">Dokumen Arsip</a></li>
</ol>
@endsection
@section('body')
<div class="card mb-4">
    <div class="card-header bg-khaki pb-0">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6 class="mb-0">Dokumen Arsip</h6>
            </div>
            <div class="col-6 text-end">
                <a class="btn btn-xs btn-primary mb-0" href="{{route('arsip.create')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah</a>
                <a class="btn btn-xs btn-success mb-0" href="{{route('arsip.importView')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Import</a>
            </div>
        </div>
    </div>
    <div class="card-body bg-khaki custom-rounded-bottom">
        <div class="card">
            <div class="table-responsive p-4">
                <table id="table" class="table align-items-center mb-4 datatable">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="min-width: 40px;">No</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="min-width: 150px;">Bagian</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="min-width: 50px;">Kode</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="min-width: 500px;">Uraian Ordner</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="min-width: 100px;">Tahun</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="min-width: 50px;">Rak ke</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="min-width: 50px;">Ordner ke</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="min-width: 50px;">Nomor Label</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="min-width: 100px;">Lokasi Penyimpanan</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="min-width: 100px;">Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Bagian</th>
                            <th>Kode</th>
                            <th>Uraian Ordner</th>
                            <th>Tahun</th>
                            <th>Rak ke</th>
                            <th>Ordner ke</th>
                            <th>Nomor Label</th>
                            <th>Lokasi Penyimpanan</th>
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
    $('.show_confirm').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
                title: `Apakah Anda Yakin?`,
                text: "Data tidak dapat dikembalikan",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });
</script>
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
                scrollY: '500px',
                scrollCollapse: true,
                ajax: "{{ route('arsip.index') }}",
                language: {
                    processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading..n.</span> '
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                        className: 'text-center text-xs forestgreen font-weight-bold',
                    }, {
                        data: 'bagian',
                        name: 'bagian',
                        className: 'text-center text-xs forestgreen font-weight-bold',
                    },
                    {
                        data: 'kode',
                        name: 'kode',
                        className: 'text-center text-xs forestgreen font-weight-bold',
                    },
                    {
                        data: 'uraian',
                        name: 'uraian',
                        className: 'text-xs forestgreen font-weight-bold',

                    },
                    {
                        data: 'tahun',
                        name: 'tahun',
                        className: 'text-center text-xs forestgreen font-weight-bold',
                    },
                    {
                        data: 'no_rak',
                        name: 'no_rak',
                        className: 'text-center text-xs forestgreen font-weight-bold',
                    },
                    {
                        data: 'no_ordner',
                        name: 'no_ordner',
                        className: 'text-center text-xs forestgreen font-weight-bold',
                    },
                    {
                        data: 'no_label',
                        name: 'no_label',
                        className: 'text-center text-xs forestgreen font-weight-bold',
                    },
                    {
                        data: 'lokasi',
                        name: 'lokasi',
                        className: 'text-center text-xs forestgreen font-weight-bold',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        className: 'text-center show_confirm',
                    },
                ],
                pageLength: 100,
                order: [
                    [4, "desc"]
                ],
                initComplete: function() {
                    this.api().columns().every(function() {
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