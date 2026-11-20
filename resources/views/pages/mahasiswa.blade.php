@extends('layouts.master')

@section('content')

<h2>Daftar Mahasiswa</h2>

<ul>
    @foreach ($mahasiswa as $nama)
        <li>{{ $nama }}</li>
    @endforeach
</ul>

@endsection