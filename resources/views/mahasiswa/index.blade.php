@extends('master')
@section('title','Data Mahasiswa')
@section('content')
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                    <h3>Data Mahasiswa</h3>
                    <p>Ini adalah data mahasiswa yang ada.</p>
                    <a href="{{route('mahasiswa.create')}}" class="btn btn-primary mb-4 ">
                        <h5 class="mb-0"> Tambah </h5>
                    </a>
                    @if (session()->has('message'))
                        <div class="mb-3">
                            <div class="alert alert-success" role="alert">
                                {{session()->get('message')}}
                            </div>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>NPM</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Mata Kuliah</th>
                                    <th>Nilai</th>
                                    <th>Laporan</th>
                                    <th>Aksi</th>
                                </tr> 
                            </thead>
                            <tbody>
                                @forelse ($mahasiswas as $mahasiswa)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td class="text-center">{{$mahasiswa->npm}}</td>
                                        <td>{{$mahasiswa->nama_mahasiswa}}</td>
                                        <td>
                                            @forelse ($mahasiswa->dosens as $item)
                                            {{$item->matakuliah}}
                                            <br>
                                            @empty
                                            <div class="text-center">
                                                Tidak ada bimbingan . . .
                                            </div>
                                            @endforelse
                                        </td>
                                        <td class="text-center">
                                            {{( $mahasiswa->absen + $mahasiswa->tugas + $mahasiswa->uts + $mahasiswa->uas)/4 }}
                                        </td>
                                        <td>
                                            @if (( $mahasiswa->absen + $mahasiswa->tugas + $mahasiswa->uts + $mahasiswa->uas)/4 > 70)
                                                Lulus
                                            @else
                                                Coba Lagi
                                            @endif
                                        </td> 
                                        <td class="text-center">
                                            <form action="{{ route('mahasiswa.destroy',$mahasiswa->id) }}" method="POST">
                                                <a href="{{ route('mahasiswas.take',$mahasiswa->id) }}" class="btn btn-primary">Ambil</a>
                                                <a href="{{ route('mahasiswa.edit',$mahasiswa->id) }}" class="btn btn-success">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <td colspan="6">Tidak ada data . . .</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
@endsection
