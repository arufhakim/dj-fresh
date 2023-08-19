@extends('layouts.master')
@section('page-title', 'Gambar')
@section('active-gambar','active')
@section('address')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page"><a class="text-white" href="{{route('gambar.index')}}">Gambar</a></li>
</ol>
@endsection
@section('body')
<div class="card mb-4">
    <div class="card-header bg-khaki pb-0">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6 class="mb-0">Gambar</h6>
            </div>
            <div class="col-6 text-end">
                <a class="btn btn-xs btn-primary mb-0" href="{{route('gambar.create')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah</a>
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
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 15%;">Nama</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 50%;">Gambar</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 15%;">Status</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 10%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gambar as $img)
                        <tr>
                            <td class="align-middle text-center">
                                <span class="text-xs forestgreen font-weight-bold">{{$loop->iteration}}</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-xs forestgreen font-weight-bold">{{$img->nama}}</span>
                            </td>
                            <td class="align-middle text-center">
                                <img src="image-upload/{{$img->gambar}}" alt="Image" height="150" class="custom-rounded" style="object-fit: cover; object-position: center;">
                            </td>
                            <td class="align-middle text-center">
                                @if($img->status == "0")
                                <span class="badge badge-xs text-xxs text-uppercase px-2 py-1 bg-gradient-warning">Tidak Aktif</span>
                                @elseif($img->status == "1")
                                <span class="badge badge-xs text-xxs text-uppercase px-2 py-1 bg-gradient-success">Aktif</span>
                                @endif
                            </td>
                            <td class="align-middle text-center">
                                <form action="{{route('gambar.destroy', ['gambar' => $img->id])}}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link text-danger text-gradient py-0 px-1 my-0 show_confirm"><i class="far fa-trash-alt"></i></button>
                                </form>
                                <a class="btn btn-link text-dark py-0 px-1 my-0" href="{{route('gambar.edit', ['gambar' => $img->id])}}"><i class="fas fa-pencil-alt text-dark" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Gambar</th>
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
                pageLength: 25,
                initComplete: function() {
                    this.api().columns([0, 1, 3]).every(function() {
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