@extends('layout')
@section('title', 'Daftar Mahasiswa')
@push('content')
<br />
<h2> Daftar Mahasiswa </h2>
<br />
<div class="alert alert-success">
Proses simpan berhasil!!
</div>
<br />
<a href="{{ route('mahasiswa_tambah') }}" class="btn btn-sm btn-info">Tambah
Mahasiswa Baru</a>
<br />
<br />
<form action="{{ route('mahasiswa_hapus_post') }}" method="post" id="formHapus">
@csrf
</form>
<table class="table table-bordered">
<thead>
<tr>
<th>Nama</th>
<th>Jurusan</th>
<th>Jenis Kelamin</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@foreach($list as $row)
<tr> 
<td>{{$row->nama}}</td>
<td>{{$jurusan[$row->jurusan] }}</td>
<td>{{$jeniskelamin[$row->jenis_kelamin]}}</td>
<td>
<a href="{{ route('mahasiswa_ubah',['id'=>$row->id]) }}"
class="btn btn-sm btn-primary">Ubah</a>
<button name="id" value="{{ $row->id}}" form="formHapus" class="btn btn-sm
btn-danger">Hapus</a>
</td>
</tr>
@endforeach
</tbody>
</table>
@endpush