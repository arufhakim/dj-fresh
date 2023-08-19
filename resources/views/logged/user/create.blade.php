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
<div class="row">
    <div class="col-md-7">
        <div class="card">
            <div class="card-header pb-0">
                <h6 class="mb-0">Tambah Pengguna Sistem</h6>
            </div>
            <div class="card-body pb-0">
                <form action="{{route('user.store')}}" method="POST">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="name" class="form-control-label">Nama<span class="required">*</span></label>
                        <input class="form-control form-control-sm @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{old('name')}}">
                        @error('name')
                        <div class="invalid-feedback mt-0">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username" class="form-control-label">Username<span class="required">*</span></label>
                        <input class="form-control form-control-sm @error('username') is-invalid @enderror" type="text" id="username" name="username" value="{{old('username')}}">
                        @error('username')
                        <div class="invalid-feedback mt-0">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-control-label">Password<span class="required">*</span></label>
                        <input class="form-control form-control-sm @error('password') is-invalid @enderror" type="password" id="password" name="password" value="{{'Petrokimia1'}}">
                        <p class="text-xs mt-1">Default Password: Petrokimia1</p class="text-xs">
                        @error('password')
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
    </div>
    <div class="col-md-5">
        <div class="card">
            <div class="card-header pb-0">
                <h6 class="mb-0">Panduan Pengisian Password</h6>
            </div>
            <div class="card-body pb-0">
                <p class="text-xs forestgreen"> 1. Password terdiri dari minimal 8 karakter. <br>
                    2. Password setidaknya memiliki 1 huruf besar dan 1 huruf kecil. <br>
                    3. Password merupakan kombinasi huruf dan angka. <br>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection