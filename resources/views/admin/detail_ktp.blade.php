@extends('admin/admin_template')

@section('content')
<div class="card my-5">
    <div class="card-header">
        {{$card -> cards_id}}
    </div>
    <div class="card-body">
        <h5 class="card-title">Jenis Kelamin : {{$card -> jenis_kelamin}}</h5>
        <h7 class="card-title">Kewarganegaraan : {{$card -> alamat}}</h7>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

        <a href=" {{$card -> cards_id}}/edit" class="btn btn-primary">Edit</a>
        <form action=" {{$card -> cards_id}}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
        <a href="/admin-page">Kembali</a>
    </div>
</div>
@endsection