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
        <h6 class="mb-0">Import Dokumen Arsip</h6>
    </div>
    <div class="card-body pb-0">
        @if(count($errors) > 0)
        <div class="alert alert-danger text-xs text-white" role="alert">
            @foreach($errors -> all() as $error)
            {{ $error }} <br>
            @endforeach
        </div>
        @endif
        <form action="{{route('arsip.import')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="file" class="form-control-label">Excel<span class="required">*</span></label>
                <input class="form-control form-control-sm @error('file') is-invalid @enderror" id="file" name="file" type="file">
                <p class="text-xs mt-1">Tipe File: XLSX</p class="text-xs">
                @error('file')
                <div class="invalid-feedback mt-3">
                    <small>{{ $message }}</small>
                </div>
                @enderror
            </div>
            <div class="row justify-content-end">
                <div class="col-md-3 text-end">
                    <a href="{{asset('/file/Dokumen_Arsip.xlsx')}}" class="btn btn-primary btn-xs mr-1">Download Template</a>
                    <button type="submit" class="btn btn-success btn-xs text-right" data-toggle="confirmation" data-placement="left">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection