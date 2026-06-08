@extends('layout.app')

@section('content')

<h1>Edit Paket Foto</h1>

<form action="{{ route('paket.update', $paket->id_paket) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Nama Paket</label>
    <br>
    <input type="text" name="nama_paket"
        value="{{ $paket->nama_paket }}">
    <br><br>

    <label>Harga</label>
    <br>
    <input type="number" name="harga"
        value="{{ $paket->harga }}">
    <br><br>

    <label>Deskripsi</label>
    <br>
    <textarea name="deskripsi">{{ $paket->deskripsi }}</textarea>
    <br><br>

    <label>Durasi</label>
    <br>
    <input type="text" name="durasi"
        value="{{ $paket->durasi }}">
    <br><br>

    <button type="submit">
        Update
    </button>

</form>

@endsection