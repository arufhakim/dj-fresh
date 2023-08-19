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
<div class="card">
    <div class="card-header pb-0">
        <h6 class="mb-0">Tambah Dokumen Arsip</h6>
    </div>
    <div class="card-body pb-0">
        <form action="{{route('arsip.store')}}" method="POST">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="uraian" class="form-control-label">Uraian Ordner<span class="required">*</span></label>
                <input class="form-control form-control-sm @error('uraian') is-invalid @enderror" type="text" id="uraian" name="uraian" value="{{old('uraian')}}">
                @error('uraian')
                <div class="invalid-feedback mt-0">
                    <small>{{ $message }}</small>
                </div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bagian" class="form-control-label">Bagian<span class="required">*</span></label>
                        <select class="form-control form-control-sm @error('bagian') is-invalid @enderror" id="bagian" name="bagian">
                            <option value=''></option>
                            <option value="Jasa EPC" @if(old('bagian')=='Jasa EPC' ) selected @endif>Jasa EPC</option>
                            <option value="Jasa Pabrik" @if(old('bagian')=='Jasa Pabrik' ) selected @endif>Jasa Pabrik</option>
                            <option value="Jasa Non Pabrik" @if(old('bagian')=='Jasa Non Pabrik' ) selected @endif>Jasa Non Pabrik</option>
                            <option value="Jasa Distribusi & Pemasaran" @if(old('bagian')=='Jasa Distribusi & Pemasaran' ) selected @endif>Jasa Distribusi & Pemasaran</option>
                        </select>
                        @error('bagian')
                        <div class="invalid-feedback mt-0">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tahun" class="form-control-label">Tahun<span class="required">*</span></label>
                        <input class="form-control form-control-sm @error('tahun') is-invalid @enderror" type="number" min="1900" max="2099" step="1" id="tahun" name="tahun" value="{{old('tahun')}}">
                        @error('tahun')
                        <div class="invalid-feedback mt-0">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="no_rak" class="form-control-label">Rak ke</label>
                        <input class="form-control form-control-sm @error('no_rak') is-invalid @enderror" type="number" id="no_rak" name="no_rak" value="{{old('no_rak')}}">
                        @error('no_rak')
                        <div class="invalid-feedback mt-0">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="no_ordner" class="form-control-label">Ordner ke</label>
                        <input class="form-control form-control-sm @error('no_ordner') is-invalid @enderror" type="number" id="no_ordner" name="no_ordner" value="{{old('no_ordner')}}">
                        @error('no_ordner')
                        <div class="invalid-feedback mt-0">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="no_label" class="form-control-label">Nomor Label</label>
                        <input class="form-control form-control-sm @error('no_label') is-invalid @enderror" type="text" id="no_label" name="no_label" value="{{old('no_label')}}">
                        @error('no_label')
                        <div class="invalid-feedback mt-0">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="lokasi" class="form-control-label">Lokasi Penyimpanan</label>
                        <select class="form-control form-control-sm @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi">
                            <option value=''></option>
                            <option value="Lemari 1" @if(old('lokasi')=='Lemari 1' ) selected @endif>Lemari 1</option>
                            <option value="Lemari 2" @if(old('lokasi')=='Lemari 2' ) selected @endif>Lemari 2</option>
                            <option value="Lemari 3" @if(old('lokasi')=='Lemari 3' ) selected @endif>Lemari 3</option>
                        </select>
                        @error('lokasi')
                        <div class="invalid-feedback mt-0">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-3 text-end">
                    <button type="submit" class="btn btn-success btn-xs text-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection