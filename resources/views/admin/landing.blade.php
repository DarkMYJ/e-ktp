@extends('admin/admin_template')

@section('content')

<h1 class="my-5">Data Penduduk</h1>
@if (session('status_penduduk'))
<div class="alert alert-success">
    {{ session('status_penduduk') }}
</div>
@endif
<table class="table mt-3">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Penduduk</th>
            <th scope="col">NO KK</th>
            <th scope="col">NIK</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($citizens as $ctz)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$ctz->nama_penduduk}}</td>
            <td>{{$ctz->no_kk}}</td>
            <td>{{$ctz->nik}}</td>
            <td>{{$ctz->alamat}}</td>
            <td><button type="button" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-danger">Hapus</button></td>
        </tr>
        @endforeach
    </tbody>
</table>

<h1 class="my-5">Data E-KTP</h1>
<table class="table mt-5">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Penduduk</th>
            <th scope="col">NIK</th>
            <th scope="col">Alamat</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>

    </tbody>
</table>
@endsection