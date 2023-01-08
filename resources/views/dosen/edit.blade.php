@extends('master')
@section('title','Edit Data Dosen')
@section('content')
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                    <h2>Edit Data Dosen</h2>
                    <p>Silahkan masukkan data dengan benar dan lengkap!</p>
                    <form action="{{route('dosen.update', ['dosen' => $dosen->id])}}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="mb-4">
                            <label for="nidn" class="form-label">NIDN</label>
                            <input type="text" name="nidn" id="nidn" placeholder="Masukkan NIDN" class="form-control" value="{{old('nidn') ?? $dosen->nidn}}">
                            @error('nidn')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="nama_dosen" class="form-label">Nama Dosen</label>
                            <input type="text" name="nama_dosen" id="nama_dosen" placeholder="Masukkan Nama Dosen" class="form-control" value="{{old('nama_dosen') ?? $dosen->nama_dosen}}">
                            @error('nama_dosen')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="matakuliah" class="form-label">Mata Kuliah</label>
                            <input type="text" name="matakuliah" id="matakuliah" placeholder="Masukkan Nama Dosen" class="form-control" value="{{old('matakuliah') ?? $dosen->matakuliah}}">
                            @error('matakuliah')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                            <button type="submit" class="btn btn-primary"  id="liveToastBtn">Edit Data Dosen</button>
                        </form>
                </div>
            </div>
    </div>
@endsection
