@extends('master')
@section('title','Data Dosen')
@section('content')
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-12">
                    <h3>Data Dosen</h3>
                    <p>Ini adalah data dosen yang ada.</p>
                    <a href="{{route('dosen.create')}}" class="btn btn-primary mb-4">
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
                                    <th>NIDN</th>
                                    <th>Nama Dosen</th>
                                    <th>Mata Kuliah</th>
                                    <th>Mahasiswa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dosens as $dosen)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td class="text-center" >{{$dosen->nidn}}</td>
                                        <td>{{$dosen->nama_dosen}}</td>
                                        <td>{{$dosen->matakuliah}}</td>
                                        <td>
                                            @forelse ($dosen->mahasiswas as $item)
                                                {{$item->nama_mahasiswa}}
                                                <br>
                                            @empty
                                            <div class="text-center">
                                                Tidak ada Mahasiswa . . .
                                            </div>
                                            @endforelse
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('dosen.destroy',$dosen->id) }}" method="POST">
                                                <a href="{{ route('dosen.edit',$dosen->id) }}" class="btn btn-success">Edit</a>
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
