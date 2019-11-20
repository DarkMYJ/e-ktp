@extends('admin/admin_template')

@section('content')
<div class="card my-5">
    <div class="card-header">
        {{$citizen -> nama_penduduk}}
    </div>
    <div class="card-body">
        <h5 class="card-title">NIK : {{$citizen -> nik}}</h5>
        <h7 class="card-title">Alamat : {{$citizen -> alamat}}</h7>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

        <a href="{{$citizen -> id}}/edit" class="btn btn-primary">Edit</a>
        <form action="{{$citizen -> id}}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
        <a href="/admin-page">Kembali</a>
    </div>
</div>
@endsection