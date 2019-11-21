@extends('admin/admin_template')

@section('content')

<h3 class="ml-3 my-4">Form Edit KTP</h3>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="POST" action="/ktp/{{ $card -> cards_id}}">
    @method('patch')
    @csrf
    <div class="form-group col-sm-5">
        <label for="nik">Alamat</label>
        <input type="text" class="form-control" value="{{ $card->cards_id }}" id=" nik" name="nik" readonly>
    </div>
    <div class="form-group col-sm-5">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $card->jenis_kelamin }}">
            <option>L</option>
            <option>P</option>
        </select>
    </div>
    <div class="form-group col-sm-5">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" value="{{ $card->alamat }}" id=" alamat" placeholder="Masukkan Alamat" name="alamat">
    </div>
    <div class="form-group col-sm-5">
        <label for="agama">Agama</label>
        <input type="text" class="form-control" value="{{ $card->agama }}" id=" agama" placeholder="Masukkan Agama" name="agama">
    </div>
    </div>
    <div class="form-group col-sm-5">
        <label for="status_kawin">Status Perkawinan</label>
        <input type="text" class="form-control" value="{{ $card->status_kawin }}" id=" status_kawin" placeholder="Masukkan Status Perkawinan" name="status_kawin">
    </div>
    <div class="form-group col-sm-5">
        <label for="status_kerja">Status Pekerjaan</label>
        <input type="text" class="form-control" value="{{ $card->status_kerja }}" id=" status_kerja" placeholder="Masukkan Status Pekerjaan" name="status_kerja">
    </div>
    <div class="form-group col-sm-5">
        <label for="kewarganegaraan">Kewarganegaraan</label>
        <input type="text" class="form-control" value="{{ $card->kewarganegaraan }}" id=" kewarganegaraan" placeholder="Masukkan Kewarganegaraan" name="kewarganegaraan">
    </div>
    <div class="form-group col-sm-5">
        <button type="submit" class="btn btn-primary mr-5">Simpan Data</button>
    </div>
</form>
@endsection