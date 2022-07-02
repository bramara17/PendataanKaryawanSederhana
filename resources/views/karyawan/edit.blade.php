@extends('layout/main')
@section('title', 'Ubah Data Mahasiswa')
@section('container')
    <div class="container mt-4">
    <div class="row">
    <div class="col-8" style="background-color:white;">
    <h1 class="mt-3">Form Ubah Data Karyawan</h1>

    <form method="post" action="/updatekaryawan/{{ $kyn->id }}">
    @method('patch')
    @csrf
    <div class="form-group">
    <label for="name">Nama</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" 
    id="name" placeholder="Nama" name="name" value="{{ $kyn -> name }}">
    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
    <label for="age">Umur</label>
    <input type="number" class="form-control @error('age') is-invalid @enderror" 
    id="age" placeholder="Umur" name="age" value="{{ $kyn ->age }}">
    @error('age')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    </div>
    
    <div class="form-group">
    <label for="region">Region</label>
    <input type="text" class="form-control" 
    id="region" placeholder="Region" name="region" value="{{ $kyn ->region }}">
    </div>

    <button type="submit" class="btn btn-primary">Ubah Data</button>
    <a href="/" class="btn btn-light">Cancel</a>
    <br><br>
    </form>

    </div>
    </div>
    </div>
@endsection