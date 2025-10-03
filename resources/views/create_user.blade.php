@extends('layouts.app')

@section('content')
<h1>Buat Pengguna Baru</h1>

<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <label>Nama:</label>
    <input type="text" name="nama"><br><br>

    <label>NPM:</label>
    <input type="text" name="npm"><br><br>

    <label>Kelas:</label>
    <select name="kelas_id">
        @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
        @endforeach
    </select><br><br>

    <button type="submit">Simpan</button>
</form>
@endsection
