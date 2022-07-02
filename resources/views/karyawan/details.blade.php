@extends('layout/main')

@section('title','Daftar Mahasiswa')
@section('container')
<div class="container">
    <br><br>
    <div class="row">
        <div class="col-10" style="background-color:white;">
            <h1 class="mt-2">Detail Karyawan</h1>
            <a href="/karyawan" class="btn btn-light">Back</a><br><br>
            <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$kyn->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$kyn->age}}</h6>
                <p class="card-text">{{$kyn->region}}</p>
                <a href="/editkaryawan/{{$kyn -> id}}" class="btn btn-primary">Edit</a>
                <form action="/deletekaryawan/{{$kyn->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
            </div>
            <br><br>
        </div>
    </div>
</div>
@endsection