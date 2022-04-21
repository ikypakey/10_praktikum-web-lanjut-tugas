@extends('mahasiswa.layout')
@section('content')
<div class="container mt-5">
    <div class="pull-left mt-2">
        <h2 class="text-center">TAMPILAN VIEW MAHASISWA</h2><br><br><br>
    </div>
    <div class="row">
        @foreach ($Mahasiswa as $mahasiswa)
        <div class="col-md-4">
            <div class="card" style="height: 15rem;">
                <div class="card-body">
                    <p class="card-title"><strong>Nama</strong> : {{ $mahasiswa -> nama }}</p>
                    <p class="card-text"><strong>NIM</strong> : {{ $mahasiswa -> nim }}</p>
                    <p class="card-text"><strong>Kelas</strong> : {{ $mahasiswa -> kelas->nama_kelas }}</p>
                    <p class="card-text"><strong>Jurusan</strong> : {{ $mahasiswa -> jurusan }}</p>
                    <a href="{{ route('mahasiswa.show',$mahasiswa->nim) }}"
                        class="btn btn-success d-flex justify-content-center">Detail mahasiswa</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
</div>
@endsection