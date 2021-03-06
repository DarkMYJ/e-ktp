@extends('admin/admin_template')

@section('content')

<h1 class="my-5">Data Penduduk</h1>
@if (session('status_penduduk'))
<div class="alert alert-success">
    {{ session('status_penduduk') }}
</div>
@elseif (session('status_ktp'))
<div class="alert alert-success">
    {{ session('status_ktp') }}
</div>
@endif
<table class="table mt-3">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Penduduk</th>
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
            <td>{{$ctz->nik}}</td>
            <td>{{$ctz->alamat}}</td>
            <td>
                <a class="btn btn-primary" href="/penduduk/{{$ctz->id}}">
                    Detail
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<h1 class="my-5" id="ktp-reg">Data E-KTP</h1>

<table class="table mt-5">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">NIK</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Kewarganegaraan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($cards as $crd)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$crd->cards_id}}</td>
            <td>{{$crd->jenis_kelamin}}</td>
            <td>{{$crd->kewarganegaraan}}</td>
            <td>
                <a class="btn btn-primary" href="/ktp/{{$crd->cards_id}}">
                    Detail
                </a>
            </td>
        </tr>
        @endforeach
        </tr>

    </tbody>
</table>
@endsection