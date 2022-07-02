@extends('layout/main')

@section('title','Daftar Mahasiswa')
@section('container')

<div class="container">
    <br><br>
    <div class="row">
    
        <div class="col-10" style="background-color:white;">
            
            <h1 class="mt-2">Tambah Data Karyawan</h1>
            
            <form method="post" action="/tambahkaryawan" >
            @csrf
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" name="name">
            </div>
            <div class="form-group">
                <label for="age">Umur</label>
                <input type="number" class="form-control" id="age" placeholder="Masukkan Umur" name="age">
            </div>
            <div class="form-group">
                <label for="region">Region</label>
                <input type="text" class="form-control" id="region" placeholder="Masukkan Region" name="region">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
            <a href="/" class="btn btn-light">Cancel</a><br><br>
            </form>
        </div>
    </div>
</div>
@endsection