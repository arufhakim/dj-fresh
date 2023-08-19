<div id="monitor-content" class="content mb-5">
    <h2 class="mb-2"><b>Monitoring 5R</b></h2>
    <p style="text-align: justify;">Monitoring 5R Departemen Pengadaan Jasa.</p>
    <div class="table-responsive">
        <div class="row mb-1">
            <div class="col-3">
                <div class="form-group">
                    <input class="form-control form-control-sm" type="date" id="start" name="start"
                    wire:model="start" required>
                </div>
            </div>
            <div class="col-auto pt-1">
                <p class="forestgreen font-weight-bold">s.d.</p>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <input class="form-control form-control-sm" type="date" id="end" name="end"
                    wire:model="end" required>
                </div>
            </div>
        </div>
        <table id="table" class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th class="text-center" style="width: 5%;">No</th>
                    <th class="text-center" style="width: 20%;">Area</th>
                    <th class="text-center" style="width: 15%;">PIC</th>
                    <th class="text-center" style="width: 15%;">Auditor</th>
                    <th class="text-center" style="width: 10%;">Kondisi</th>
                    <th class="text-center" style="width: 20%;">Tanggal</th>
                    <th class="text-center" style="width: 15%;">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($monitoring as $monitor)
                    <tr>
                        <td class="align-middle text-center">
                            {{ $loop->iteration }}
                        </td>
                        <td class="align-middle">
                            {{ $monitor->area }}
                        </td>
                        <td class="align-middle">
                            {{ $monitor->pic }}
                        </td>
                        <td class="align-middle">
                            {{ $monitor->auditor }}
                        </td>
                        <td class="align-middle text-center">
                            @if ($monitor->kondisi == 'Baik')
                                <span class="badge bg-success">Baik</span>
                            @elseif($monitor->kondisi == 'Cukup')
                                <span class="badge bg-warning">Cukup</span>
                            @elseif($monitor->kondisi == 'Kurang')
                                <span class="badge bg-danger">Kurang</span>
                            @else
                                <span></span>
                            @endif
                        </td>
                        <td class="align-middle text-center">
                            {{ date('d F Y', strtotime($monitor->tanggal)) }}
                        </td>
                        <td class="align-middle">
                            {{ $monitor->keterangan }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
