@extends('admin/admin_template')

@section('content')

<h3 class="ml-3 my-4">Form Edit Data Penduduk</h3>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="POST" action="/penduduk/{{ $citizen -> id}}">
    @method('patch')
    @csrf
    <div class="form-group col-sm-5">
        <label for="nama_penduduk">Nama Penduduk</label>
        <input type="text" class="form-control" value="{{ $citizen -> nama_penduduk}}" id=" nama_penduduk" placeholder="Masukkan Nama Lengkap" name="nama_penduduk">

    </div>
    <div class="form-group col-sm-5">
        <label for="no_kk">NO KK</label>
        <input type="number" class="form-control" value="{{ $citizen -> no_kk }}" name="no_kk" id="no_kk" placeholder="Masukkan NO KK">
    </div>
    <div class="form-group col-sm-5">
        <label for=" nik">NIK</label>
        <input type="number" class="form-control" value="{{ $citizen -> nik }}" name=" nik" id="nik" placeholder="Masukkan NIK">
    </div>
    <div class="form-group col-sm-5">
        <label for=" alamat">Alamat</label>
        <input type="text" class="form-control" value="{{$citizen -> alamat }}" name=" alamat" id="alamat" placeholder="Masukkan Alamat">
    </div>

    <div class="form-group col-sm-5">
        <button type="submit" class="btn btn-primary mr-5">Ubah Data</button>
    </div>
</form>
@endsection