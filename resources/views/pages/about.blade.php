@extends('layouts.master')

@section('content')
    <h2>About Mahasiswa</h2>
    <p>Nama: {{ $nama }}</p>
    <p>NIM: {{ $nim }}</p>
    <p>Kelas: {{ $kelas }}</p>
@endsection