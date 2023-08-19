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
<div class="card">
    <div class="card-header pb-0">
        <h6 class="mb-0">Edit Gambar</h6>
    </div>
    <div class="card-body pb-0">
        <form action="{{route('gambar.update', ['gambar' => $gambar->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="nama" class="form-control-label">Nama<span class="required">*</span></label>
                <input class="form-control form-control-sm @error('nama') is-invalid @enderror" type="text" id="nama" name="nama" value="{{old('nama') ?? $gambar->nama}}">
                @error('nama')
                <div class="invalid-feedback mt-0">
                    <small>{{ $message }}</small>
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="status" class="form-control-label">Status<span class="required">*</span></label>
                <select class="form-control form-control-sm @error('status') is-invalid @enderror" id="status" name="status">
                    <option value=''></option>
                    <option value="0" @if(old('status', $gambar->status)=='0' ) selected @endif>Tidak Aktif</option>
                    <option value="1" @if(old('status', $gambar->status)=='1' ) selected @endif>Aktif</option>
                </select>
                @error('status')
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