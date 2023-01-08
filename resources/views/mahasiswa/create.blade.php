@extends('master')
@section('title','Buat Data Mahasiswa')
@section('content')
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                    <h2>Tambah Data Mahasiswa</h2>
                    <p>Silahkan masukkan data dengan benar dan lengkap!</p>
                    <form action="{{route('mahasiswa.store')}}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="npm" class="form-label">NPM</label>
                            <input type="text" name="npm" id="npm" placeholder="Masukkan Npm" class="form-control" value="{{old('npm')}}">
                            @error('npm')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                            <div class="mb-4">
                                <label for="nama_mahasiswa" class="form-label">Masukan Nama</label>
                                <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" placeholder="Masukkan Nama" class="form-control" value="{{old('nama_mahasiswa')}}">
                                @error('nama_mahasiswa')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                    <option selected disabled>Pilih Jenis Kelamin</option>
                                    <option value="Laki - Laki" {{old('jenis_kelamin') == "Laki - Laki" ? "selected" : ""}}>Laki - Laki</option>
                                    <option value="Perempuan" {{old('jenis_kelamin') == "Perempuan" ? "selected" : ""}}>Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="absen" class="form-label">Masukan Nilai Absen</label>
                                <input type="text" name="absen" id="absen" placeholder="Masukkan Nilai Absen" class="form-control" value="{{old('absen')}}">
                                @error('absen')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="tugas" class="form-label">Masukan Nilai Tugas</label>
                                <input type="text" name="tugas" id="tugas" placeholder="Masukan Nilai Tugas" class="form-control" value="{{old('tugas')}}">
                                @error('tugas')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="uts" class="form-label">Masukan Nilai UTS</label>
                                <input type="text" name="uts" id="uts" placeholder="Masukkan Nilai UTS" class="form-control" value="{{old('uts')}}">
                                @error('uts')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="uas" class="form-label">Masukan Nilai UAS</label>
                                <input type="text" name="uas" id="uas" placeholder="Masukan Nilai UAS" class="form-control" value="{{old('uas')}}">
                                @error('uas')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary  mb-4">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
