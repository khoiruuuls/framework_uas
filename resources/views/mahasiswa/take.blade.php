@extends('master')
@section('title','Ambil Bimbingan')
@section('content')
<div class="container pt-4 bg-white ">
    <div class="row">
        <div class="col-md-12">
                <h2 class="mb-4">Ambil Bimbingan</h2>
                <div class="pt-3">
                        <form action="{{route('mahasiswas.takeStore',['mahasiswa' => $mahasiswa->id])}}" method="post">
                            @csrf
                                    @foreach ($dosens as $item)  
                                    <ul>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1 px-2" name="dosen_id[]" type="checkbox" id="{{$item->id}}" value="{{$item->id}}">
                                            <label class="form-check-label px-3" for="{{$item->id}}">{{$item->nama_dosen}} - {{$item->matakuliah}}</label>
                                            <br>
                                        </li>
                                    </ul>
                                    @endforeach  
                                    <button type="submit" class="btn btn-primary text-center mt-4">Ambil Jadwal</button>
                        </form>
                </div>
            </div>
        </div>
</div>
@endsection
