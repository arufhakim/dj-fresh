@extends('layouts.master')
@section('page-title', 'Penilaian Individu')
@section('active-rewarding','active')
@section('address')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page"><a class="text-white" href="{{route('rewarding.index')}}">Penilaian Individu</a></li>
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
                <h6 class="mb-0">Penilaian Individu</h6>
            </div>
            <div class="col-6 text-end">
                <a class="btn btn-xs btn-primary mb-0" href="{{route('rewarding.create')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah</a>
            </div>
        </div>
    </div>
    <div class="card-body bg-khaki custom-rounded-bottom">
        <div class="card">
            <form action="{{route('rewarding.index')}}" method="GET">
                <div class="row justify-content-center align-items-center mt-5">
                    <div class="col-3">
                        <div class="form-group">
                            <input class="form-control form-control-sm" type="date" id="start" name="start" value="{{$start}}" required>
                        </div>
                    </div>
                    <div class="col-auto">
                        <p class="text-xs forestgreen font-weight-bold">s.d.</p>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <input class="form-control form-control-sm" type="date" id="end" name="end" value="{{$end}}" required>
                        </div>
                    </div>
                    <div class="col-1">
                        <button type="submit" class="btn btn-success btn-sm py-2 px-3" style="line-height: 17px;">Submit</button>
                    </div>
                </div>
            </form>
            <div class="table-responsive p-4">
                <table id="table" class="table align-items-center mb-4 datatable">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 10%;">No.</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 25%;">Nama</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 15%;">Tanggal</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 10%;">Kebersihan</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 10%;">Kerapihan</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 10%;">Tanggung Jawab</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 10%;">Total</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 10%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rewarding as $reward)
                        <tr>
                            <td class="align-middle text-center">
                                <span class="text-xs forestgreen font-weight-bold">{{$loop->iteration}}</span>
                            </td>
                            <td class="align-middle">
                                <span class="text-xs forestgreen font-weight-bold">{{$reward->pegawai->nama}}</span>
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
                                        <td class="align-middle text-center">
                                            <form action="{{route('rewarding.destroy', ['rewarding' => $reward->id])}}" method="POST" style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link text-danger text-gradient py-0 px-1 my-0 show_confirm" data-toggle="confirmation" data-placement="left"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                            <a class="btn btn-link text-dark py-0 px-1 my-0" href="{{route('rewarding.edit', ['rewarding' => $reward->id])}}"><i class="fas fa-pencil-alt text-dark" aria-hidden="true"></i></a>
                                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Kebersihan</th>
                            <th>Kerapihan</th>
                            <th>Tanggung Jawab</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Realisasi PR-PO (Item) Kumulatif -->

<div class="card">
    <div class="card-body" id="chart">
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
                scrollY: '500px',
                scrollCollapse: true,
                pageLength: 25,
                initComplete: function() {
                    this.api().columns([0, 1, 2, 3, 4, 5, 6]).every(function() {
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
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
    var options = {
        title: {
            text: 'Penilaian Individu Tertinggi Bulan {{$bulan}}',
            offsetY: 0,
            align: 'center',
        },
        subtitle: {
            text: 'Berdasarkan Bulan',
            align: 'center',
        },
        series: [{
            name: 'Total Nilai',
            data: <?php echo json_encode($score) ?>,
            color: '#2f4f4f'
        }, ],
        chart: {
            type: 'bar',
            height: 350,
        },
        plotOptions: {
            bar: {
                horizontal: false,
                borderRadius: 10,
                columnWidth: '70%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: true
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: <?php echo json_encode($name) ?>,
        },
        yaxis: {
            title: {
                text: 'Total Nilai'
            },
            labels: {
                formatter: function(val) {
                    return Math.floor(val)
                }
            }
        },
        fill: {
            opacity: 1
        },

    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>
@endpush