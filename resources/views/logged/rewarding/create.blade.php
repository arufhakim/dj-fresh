@extends('layouts.master')
@section('page-title', 'Penilaian Individu')
@section('active-rewarding','active')
@section('address')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page"><a class="text-white" href="{{route('rewarding.index')}}">Penilaian Individu</a></li>
</ol>
@endsection
@section('body')
<div class="card">
    <div class="card-header pb-0">
        <h6 class="mb-0">Tambah Penilaian Individu</h6>
    </div>
    <div class="card-body pb-0">
        <form action="{{route('rewarding.store')}}" method="POST">
            @csrf
            @method('post')
            <div class="row mb-4">
                <div class="col-6">
                    <div class="form-group">
                        <label for="pegawai_id" class="form-control-label">Nama<span class="required">*</span></label>
                        <select id="pegawai_id" name="pegawai_id" class="form-control form-control-sm @error('pegawai_id') is-invalid @enderror">
                            <option value=''></option>
                            @foreach($pegawai as $staf)
                            <option value='{{$staf->id}}' {{ old('pegawai_id') == $staf->id ? 'selected' : '' }}>{{$staf->nama}}</option>
                            @endforeach
                        </select>
                        @error('pegawai_id')
                        <div class="invalid-feedback mt-0">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="tanggal" class="form-control-label">Tanggal<span class="required">*</span></label>
                        <input class="form-control form-control-sm @error('tanggal') is-invalid @enderror" type="date" id="tanggal" name="tanggal" value="{{old('tanggal')}}">
                        @error('tanggal')
                        <div class="invalid-feedback mt-0">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group text-center mb-5">
                <label for="kebersihan" class="form-control-label d-block mb-3">Kebersihan<span class="required">*</span></label>
                <div class="row justify-content-center align-items-center">
                    <div class="col-3 text-xs forestgreen font-weight-bold text-end">Sangat Buruk</div>
                    <div class="col-auto">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input m-0" type="radio" name="kebersihan" id="kebersihan1" value="1" @if(old('kebersihan')==1) checked @endif><br>
                            <label class="form-check-label text-xs p-0 m-0" for="kebersihan1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input m-0" type="radio" name="kebersihan" id="kebersihan2" value="2" @if(old('kebersihan')==2) checked @endif><br>
                            <label class="form-check-label text-xs p-0 m-0" for="kebersihan2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input m-0" type="radio" name="kebersihan" id="kebersihan3" value="3" @if(old('kebersihan')==3) checked @endif><br>
                            <label class="form-check-label text-xs p-0 m-0" for="kebersihan3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input m-0" type="radio" name="kebersihan" id="kebersihan4" value="4" @if(old('kebersihan')==4) checked @endif><br>
                            <label class="form-check-label text-xs p-0 m-0" for="kebersihan4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input m-0" type="radio" name="kebersihan" id="kebersihan5" value="5" @if(old('kebersihan')==5) checked @endif><br>
                            <label class="form-check-label text-xs p-0 m-0" for="kebersihan5">5</label>
                        </div>
                    </div>
                    <div class="col-3 text-xs forestgreen font-weight-bold text-start">Sangat Baik</div>
                    @error('kebersihan')
                    <div class="invalid-feedback mt-0">
                        <small>{{ $message }}</small>
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group text-center mb-5">
                <label for="kerapihan" class="form-control-label d-block mb-3">Kerapihan<span class="required">*</span></label>
                <div class="row justify-content-center align-items-center">
                    <div class="col-3 text-xs forestgreen font-weight-bold text-end">Sangat Buruk</div>
                    <div class="col-auto">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input m-0" type="radio" name="kerapihan" id="kerapihan1" value="1" @if(old('kerapihan')==1) checked @endif><br>
                            <label class="form-check-label text-xs p-0 m-0" for="kerapihan1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input m-0" type="radio" name="kerapihan" id="kerapihan2" value="2" @if(old('kerapihan')==2) checked @endif><br>
                            <label class="form-check-label text-xs p-0 m-0" for="kerapihan2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input m-0" type="radio" name="kerapihan" id="kerapihan3" value="3" @if(old('kerapihan')==3) checked @endif><br>
                            <label class="form-check-label text-xs p-0 m-0" for="kerapihan3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input m-0" type="radio" name="kerapihan" id="kerapihan4" value="4" @if(old('kerapihan')==4) checked @endif><br>
                            <label class="form-check-label text-xs p-0 m-0" for="kerapihan4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input m-0" type="radio" name="kerapihan" id="kerapihan5" value="5" @if(old('kerapihan')==5) checked @endif><br>
                            <label class="form-check-label text-xs p-0 m-0" for="kerapihan5">5</label>
                        </div>
                    </div>
                    <div class="col-3 text-xs forestgreen font-weight-bold text-start">Sangat Baik</div>
                </div>
                @error('kerapihan')
                <div class="invalid-feedback mt-0">
                    <small>{{ $message }}</small>
                </div>
                @enderror
            </div>
            <div class="form-group text-center">
                <label for="tanggungjawab" class="form-control-label d-block mb-3">Tanggungjawab<span class="required">*</span></label>
                <div class="row justify-content-center align-items-center">
                    <div class="col-3 text-xs forestgreen font-weight-bold text-end">Sangat Buruk</div>
                    <div class="col-auto">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input m-0" type="radio" name="tanggungjawab" id="tanggungjawab1" value="1" @if(old('tanggungjawab')==1) checked @endif><br>
                            <label class="form-check-label text-xs p-0 m-0" for="tanggungjawab1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input m-0" type="radio" name="tanggungjawab" id="tanggungjawab2" value="2" @if(old('tanggungjawab')==2) checked @endif><br>
                            <label class="form-check-label text-xs p-0 m-0" for="tanggungjawab2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input m-0" type="radio" name="tanggungjawab" id="tanggungjawab3" value="3" @if(old('tanggungjawab')==3) checked @endif><br>
                            <label class="form-check-label text-xs p-0 m-0" for="tanggungjawab3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input m-0" type="radio" name="tanggungjawab" id="tanggungjawab4" value="4" @if(old('tanggungjawab')==4) checked @endif><br>
                            <label class="form-check-label text-xs p-0 m-0" for="tanggungjawab4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input m-0" type="radio" name="tanggungjawab" id="tanggungjawab5" value="5" @if(old('tanggungjawab')==5) checked @endif><br>
                            <label class="form-check-label text-xs p-0 m-0" for="tanggungjawab5">5</label>
                        </div>
                    </div>
                    <div class="col-3 text-xs forestgreen font-weight-bold text-start">Sangat Baik</div>
                </div>
                @error('tanggungjawab')
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