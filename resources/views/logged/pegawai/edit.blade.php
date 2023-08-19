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
<div class="card">
    <div class="card-header pb-0">
        <h6 class="mb-0">Edit Daftar Pegawai</h6>
    </div>
    <div class="card-body pb-0">
        <form action="{{route('pegawai.update', ['pegawai' => $pegawai->id])}}" method="POST">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="nik" class="form-control-label">NIK<span class="required">*</span></label>
                <input class="form-control form-control-sm @error('nik') is-invalid @enderror" type="text" id="nik" name="nik" value="{{old('nik') ?? $pegawai->nik}}">
                @error('nik')
                <div class="invalid-feedback mt-0">
                    <small>{{ $message }}</small>
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama" class="form-control-label">Nama<span class="required">*</span></label>
                <input class="form-control form-control-sm @error('nama') is-invalid @enderror" type="text" id="nama" name="nama" value="{{old('nama') ?? $pegawai->nama}}">
                @error('nama')
                <div class="invalid-feedback mt-0">
                    <small>{{ $message }}</small>
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jabatan" class="form-control-label">jabatan<span class="required">*</span></label>
                <input class="form-control form-control-sm @error('jabatan') is-invalid @enderror" type="text" id="jabatan" name="jabatan" value="{{old('jabatan') ?? $pegawai->jabatan}}">
                @error('jabatan')
                <div class="invalid-feedback mt-0">
                    <small>{{ $message }}</small>
                </div>
                @enderror
            </div>
            <div class="row justify-content-end">
                <div class="col-md-3 text-end">
                    <button type="submit" class="btn btn-success btn-xs text-right" data-toggle="confirmation" data-placement="left">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection