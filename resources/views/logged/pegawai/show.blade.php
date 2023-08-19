@extends('layouts.master')
@section('page-title', 'Daftar Pegawai')
@section('active-pegawai','active')
@section('address')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page"><a class="text-white" href="{{route('pegawai.index')}}">Daftar Pegawai</a></li>
</ol>
@endsection
@section('body')
<div class="card mb-4">
    <div class="card-header bg-khaki pb-0">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6 class="mb-0">Penilaian {{$pegawai->nama}}</h6>
            </div>
        </div>
    </div>
    <div class="card-body bg-khaki custom-rounded-bottom">
        <div class="card">
            <div class="table-responsive p-4">
                <table id="table" class="table align-items-center mb-4 datatable">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 10%;">No</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 20%;">Tanggal</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 20%;">Kebersihan</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 20%;">Kerapihan</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 20%;">Tanggung Jawab</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 10%;">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pegawai->rewarding as $reward)
                        <tr>
                            <td class="align-middle text-center">
                                <span class="text-xs forestgreen font-weight-bold">{{$loop->iteration}}</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-xs forestgreen font-weight-bold">{{date('d F Y', strtotime($reward->tanggal))}}</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-xs forestgreen font-weight-bold">{{$reward->kebersihan}}</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-xs forestgreen font-weight-bold">{{$reward->kerapihan}}</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-xs forestgreen font-weight-bold">{{$reward->tanggungjawab}}</span>
                            </td>
                            @if($reward->score <= 5) <td class="align-middle text-center bg-danger">
                                <span class="text-xs forestgreen font-weight-bold">{{$reward->score}}</span>
                                </td>
                                @elseif($reward->score > 5 && $reward->score <= 10) <td class="align-middle text-center bg-warning">
                                    <span class="text-xs forestgreen font-weight-bold">{{$reward->score}}</span>
                                    </td>
                                    @elseif($reward->score > 10 && $reward->score <= 15) <td class="align-middle text-center bg-success">
                                        <span class="text-xs forestgreen font-weight-bold">{{$reward->score}}</span>
                                        </td>
                                        @endif
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Kebersihan</th>
                            <th>Kerapihan</th>
                            <th>Tanggung Jawab</th>
                            <th>Rata-Rata</th>
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