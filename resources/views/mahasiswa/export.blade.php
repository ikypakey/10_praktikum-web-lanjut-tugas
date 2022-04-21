@extends('mahasiswa.layout')

@section('content')
<div class="col-lg-12 margin-tb mb-5">
    <a href="/mahasiswa" style="text-decoration: none;color:black">
        <div class="text-center pull-left mt-2">
            <h3>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h3>
        </div>
    </a>
</div>
<h2 class="text-center">KARTU HASIL STUDI (KHS)</h2>
<div class="bio mt-5 mb-4">
    <p><strong>Nama : </strong> {{ $mhs -> nama }}</p>
    <p><strong>NIM : </strong> {{ $mhs-> nim }}</p>
    <p><strong>Kelas : </strong> {{$mhs -> kelas -> nama_kelas }}</p>
</div>
@php
@endphp
<table class="table table-bordered 2px">
    <thead>
        <tr>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">SKS</th>
            <th scope="col">Semester</th>
            <th scope="col">Nilai</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mhs -> matakuliah as $item)
        <tr>
            <th scope="row">{{ $item -> nama_matkul }}</th>
            <td>{{ $item -> sks }}</td>
            <td>{{ $item -> semester }}</td>
            <td>{{ $item -> pivot -> nilai }}</td>
        </tr>
        @endforeach


    </tbody>
</table>
@endsection