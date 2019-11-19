@extends('admin/admin_template')

@section('content')

<h3 class="ml-3 my-4">Form Registrasi KTP</h3>
@if (session('status_ktp'))
<div class="alert alert-success">
    {{ session('status_ktp') }}
</div>
@endif
<form method="POST" action="/reg-ktp">
    @csrf
    <div class="form-group col-sm-5">
        <label for="cards_id">NIK</label>
        <select class="form-control" id="cards_id" name="cards_id">
            <option></option>
            @foreach ($card as $ctz)
            <option>{{$ctz->nik}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-5">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
            <option>L</option>
            <option>P</option>
        </select>
    </div>
    <div class="form-group col-sm-5">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" value="{{ old('alamat') }}" id=" alamat" placeholder="Masukkan Alamat" name="alamat">
    </div>
    <div class="form-group col-sm-5">
        <label for="agama">Agama</label>
        <input type="text" class="form-control" value="{{ old('agama') }}" id=" agama" placeholder="Masukkan Agama" name="agama">
    </div>
    </div>
    <div class="form-group col-sm-5">
        <label for="status_kawin">Status Perkawinan</label>
        <input type="text" class="form-control" value="{{ old('status_kawin') }}" id=" status_kawin" placeholder="Masukkan Status Perkawinan" name="status_kawin">
    </div>
    <div class="form-group col-sm-5">
        <label for="status_kerja">Status Pekerjaan</label>
        <input type="text" class="form-control" value="{{ old('status_kerja') }}" id=" status_kerja" placeholder="Masukkan Status Pekerjaan" name="status_kerja">
    </div>
    <div class="form-group col-sm-5">
        <label for="kewarganegaraan">Kewarganegaraan</label>
        <input type="text" class="form-control" value="{{ old('kewarganegaraan') }}" id=" kewarganegaraan" placeholder="Masukkan Kewarganegaraan" name="kewarganegaraan">
    </div>
    <div class="form-group col-sm-5">
        <label for="city-created_at">Kota Dibuat</label>
        <input type="text" class="form-control" value="{{ old('city-created_at') }}" id=" city-created_at" placeholder="Masukkan Nama Kota Dibuat" name="city-created_at">
    </div>
    <div class="form-group col-sm-5">
        <button type="submit" class="btn btn-primary mr-5">Simpan Data</button>
    </div>
</form>
@endsection