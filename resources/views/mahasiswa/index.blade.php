@extends('mahasiswa.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
        </div>
    </div>
</div>

<!-- add search fiture -->
<div class="row justify-content-start">
            <div class="col-md-6">
                <form action="/mahasiswa">
                    <div class="input-group mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Masukkan Nama Mahasiswa" name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn-info" type="submit" id="button-addon2"><img
                                src="{{ asset('img/search.png') }}" alt="" height="20px">Cari</button>
                    </div>
                </form>
            </div>
        </div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Foto</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th width="300px">Action</th>
    </tr>
    @foreach ($post as $mhs)
    <tr>
        <td>{{ $mhs -> nim }}</td>
        <td>{{ $mhs -> nama }}</td>
        <td><img src="{{ asset('storage/'.$mhs -> foto) }}" alt="" height="150px" width="150px" class="rounded"
            style="object-fit: cover"></td>
        <td>{{ $mhs -> kelas->nama_kelas }}</td>
        <td>{{ $mhs -> jurusan }}</td>
        <td>
            <form action="{{ route('mahasiswa.destroy',['mahasiswa'=>$mhs->nim]) }}" method="POST">
                <a class="btn btn-info" href="{{ route('mahasiswa.show',$mhs->nim) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mhs->nim) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                <a href="/nilai/{{$mhs -> nim}}" class="btn btn-warning">Nilai </a>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="d-flex justify-content-center">{{$post -> links()}}</div>
@endsection