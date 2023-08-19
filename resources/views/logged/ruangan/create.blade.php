@extends('layouts.master')
@section('page-title', 'Ruangan')
@section('active-ruangan','active')
@section('address')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page"><a class="text-white" href="{{route('ruangan.index')}}">Ruangan</a></li>
</ol>
@endsection
@section('body')
<div class="card">
    <div class="card-header pb-0">
        <h6 class="mb-0">Tambah Peminjaman Ruangan</h6>
    </div>
    <div class="card-body pb-0">
        <form action="{{route('ruangan.store')}}" method="POST">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="pengguna" class="form-control-label">Pengguna<span class="required">*</span></label>
                <input class="form-control form-control-sm @error('pengguna') is-invalid @enderror" type="text" id="pengguna" name="pengguna" value="{{old('pengguna')}}">
                @error('pengguna')
                <div class="invalid-feedback mt-0">
                    <small>{{ $message }}</small>
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="ruangan" class="form-control-label">Ruangan<span class="required">*</span></label>
                <select class="form-control form-control-sm @error('ruangan') is-invalid @enderror" id="ruangan" name="ruangan">
                    <option value=''></option>
                    <option value="0" @if(old('ruangan')=='0' ) selected @endif>Nitrea</option>
                    <option value="1" @if(old('ruangan')=='1' ) selected @endif>Niphos</option>
                </select>
                @error('ruangan')
                <div class="invalid-feedback mt-0">
                    <small>{{ $message }}</small>
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tanggal" class="form-control-label">Tanggal<span class="required">*</span></label>
                <input class="form-control form-control-sm @error('tanggal') is-invalid @enderror" type="date" id="tanggal" name="tanggal" value="{{old('tanggal')}}">
                @error('tanggal')
                <div class="invalid-feedback mt-0">
                    <small>{{ $message }}</small>
                </div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="waktu_mulai" class="form-control-label">Waktu Mulai<span class="required">*</span></label>
                        <input class="form-control form-control-sm @error('waktu_mulai') is-invalid @enderror" type="time" id="waktu_mulai" name="waktu_mulai" value="{{old('waktu_mulai')}}">
                        @error('waktu_mulai')
                        <div class="invalid-feedback mt-0">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="waktu_selesai" class="form-control-label">Waktu Selesai<span class="required">*</span></label>
                        <input class="form-control form-control-sm @error('waktu_selesai') is-invalid @enderror" type="time" id="waktu_selesai" name="waktu_selesai" value="{{old('waktu_selesai')}}">
                        @error('waktu_selesai')
                        <div class="invalid-feedback mt-0">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan" class="form-control-label">Agenda</label>
                <textarea class="form-control form-control-sm @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" rows="3">{{old('keterangan')}}</textarea>
                @error('keterangan')
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