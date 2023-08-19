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
    <div class="card">
        <div class="card-header pb-0">
            <h6 class="mb-0">Tambah Monitoring</h6>
        </div>
        <div class="card-body pb-0">
            <form action="{{ route('monitoring.store') }}" method="POST">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="area" class="form-control-label">Area<span class="required">*</span></label>
                    <input class="form-control form-control-sm @error('area') is-invalid @enderror" type="text"
                        id="area" name="area" value="{{ old('area') }}">
                    @error('area')
                        <div class="invalid-feedback mt-0">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pic" class="form-control-label">PIC<span class="required">*</span></label>
                    <input class="form-control form-control-sm @error('pic') is-invalid @enderror" type="text"
                        id="pic" name="pic" value="{{ old('pic') }}">
                    @error('pic')
                        <div class="invalid-feedback mt-0">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="auditor" class="form-control-label">Auditor<span class="required">*</span></label>
                    <input class="form-control form-control-sm @error('auditor') is-invalid @enderror" type="text"
                        id="auditor" name="auditor" value="{{ old('auditor') }}">
                    @error('auditor')
                        <div class="invalid-feedback mt-0">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kondisi" class="form-control-label">Kondisi</label>
                    <select class="form-control form-control-sm @error('kondisi') is-invalid @enderror" id="kondisi"
                        name="kondisi">
                        <option value=''></option>
                        <option value="Baik" @if (old('kondisi') == 'Baik') selected @endif>Baik</option>
                        <option value="Cukup" @if (old('kondisi') == 'Cukup') selected @endif>Cukup</option>
                        <option value="Kurang" @if (old('kondisi') == 'Kurang') selected @endif>Kurang</option>
                    </select>
                    @error('kondisi')
                        <div class="invalid-feedback mt-0">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal" class="form-control-label">Tanggal</label>
                    <input class="form-control form-control-sm @error('tanggal') is-invalid @enderror" type="date"
                        id="tanggal" name="tanggal" value="{{ old('tanggal') }}">
                    @error('tanggal')
                        <div class="invalid-feedback mt-0">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="keterangan" class="form-control-label">Keterangan</label>
                    <input class="form-control form-control-sm @error('keterangan') is-invalid @enderror" type="text"
                        id="keterangan" name="keterangan" value="{{ old('keterangan') }}">
                    @error('keterangan')
                        <div class="invalid-feedback mt-0">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                </div>
                <div class="row justify-content-end">
                    <div class="col-md-3 text-end">
                        <button type="submit" class="btn btn-success btn-xs text-right" data-toggle="confirmation"
                            data-placement="left">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
