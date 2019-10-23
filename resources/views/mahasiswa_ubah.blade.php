@extends('layout')
@section('title', 'Tambah Mahasiswa')
@push('content')
<br />
<h2> Tambah Mahasiswa </h2>
<br />
<form action="{{ route('mahasiswa_ubah_post') }}" method="POST">
@csrf
<div class="form-group row">
<label for="nama" class="col-sm-2 col-form-label">Nama</label>
<div class="col-sm-10">
<input name="id" type="hidden" value="{{ $data->id }}" />
<input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama}}">
</div>
</div>
<div class="form-group row">
<label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
<div class="col-sm-10">
<select class="form-control" name="jurusan">
<option value="SI" {{ $data->jurusan == 'SI' ? 'selected' : '' }}>
Sistem Informasi
</option>
<option value="MI" {{ $data->jurusan == 'MI' ? 'selected' : '' }}>
Manajemen Informatika
</option>
<option value="EN" {{ $data->jurusan == 'EN' ? 'selected' : '' }}>
Sastra Inggris
</option>
</select>
</div>
</div>
<div class="form-group row">
<label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
<div class="col-sm-10">
<div class="form-check">
<input class="form-check-input" type="radio" name="jenis_kelamin" value="L"
{{ $data->jenis_kelamin == 'L' ? 'checked' : '' }}>
<label class="form-check-label" >Laki-laki</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="jenis_kelamin" value="P"
{{ $data->jenis_kelamin == 'P' ? 'checked' : '' }}>
<label class="form-check-label" >
Perempuan
</label>
</div>
</div>
</div>
<div class="form-group row">
<div class="col-sm-2"></div>
<div class="col-sm-10">
<button type="submit" class="btn btn-primary">Daftarkan</button>
</div>
</div>
</form>
@endpush