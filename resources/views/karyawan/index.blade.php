@extends('layout/main')

@section('title','Daftar Mahasiswa')
@section('container')
<div class="container">
<br><br>
    <div class="row">
        
        <div class="col-10" style="background-color:white;">
            <h1 class="mt-2">Data Karyawan</h1>
            <a href="/karyawan/create" class="btn btn-primary my-3">Tambah Data</a>
            <ul class="list-group">
            @foreach($karyawann as $kyn)
           <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$kyn -> name}}
                <a href="/detailkaryawan/{{$kyn -> id}}" class="badge badge-info">details</a>

            </li>
        @endforeach
        </ul><br><br>
        </div>
    </div>
</div>
@endsection