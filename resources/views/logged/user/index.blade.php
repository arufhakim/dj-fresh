@extends('layouts.master')
@section('page-title', 'Pengguna Sistem')
@section('active-user','active')
@section('address')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page"><a class="text-white" href="{{route('user.index')}}">Pengguna Sistem</a></li>
</ol>
@endsection
@section('body')
<div class="card mb-4">
    <div class="card-header bg-khaki pb-0">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <h6 class="mb-0">Pengguna Sistem</h6>
            </div>
            <div class="col-6 text-end">
                <a class="btn btn-xs btn-primary mb-0" href="{{route('user.create')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah</a>
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
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 40%;">Nama</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 30%;">Username</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center" style="width: 20%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td class="align-middle text-center">
                                <span class="text-xs forestgreen font-weight-bold">{{$loop->iteration}}</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-xs forestgreen font-weight-bold">{{$user->name}}</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-xs forestgreen font-weight-bold">{{$user->username}}</span>
                            </td>
                            <td class="align-middle text-center">
                                <form action="{{route('user.reset', ['user' => $user->id])}}" method="POST">
                                    @csrf
                                    @method('patch')
                                    <button type="submit" class="btn btn-xs text-xs btn-danger my-0"><b>Reset Password</b></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
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
                    this.api().columns([0, 1, 2]).every(function() {
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