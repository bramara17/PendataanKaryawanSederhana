@extends('layout/main')

@section('title','PT SUKSES SELALU GROUP')
@section('container')
<div class="container">
<br><br>
    <div class="row" >
        
        <div class="col-10" style="background-color:white;">
            <h1 class="mt-2">Data Karyawan</h1>
            
            <div class="row">
                <div class="col-md-8">
                
                <a href="/karyawan/create" class="btn btn-primary my-3">Tambah Data</a>
                @if (session('status'))
                <div class="alert alert-success">
                {{ session('status')}}
                </div>
                @endif

                </div>
                <div class="col-md-4">
                    <form action="/search" method="get">
                    <div class="input-group mt-4">
                    <input type="search" name="search" class="form-control" placeholder="Ketik Nama">
                    <span class="input-group-prepend">
                    <button type="submit" class="btn btn-success">Search</button>
                    </span>
                    </div>
                    </form>
                    </div>
                </div>

            

            <table class="table mt-4">
    <thead class="table table-bordered">
        <tr>
            <!-- <th scope="col">#<th> -->
            <th scope="col">ID Karyawan</th>
            <th scope="col">NAME</th>
            <th scope="col">AGE</th>
            <th scope="col">REGION</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody style="background-color:white;">
    @foreach($employees as $mhs)
        <tr>
            <!-- <th scope="row">{{$loop->iteration}}</th> -->
            <td>{{$mhs->id}}</td>
            <td>{{$mhs->name}}</td>
            <td>{{$mhs->age}}</td>
            <td>{{$mhs->region}}</td>
            <td>
            <a href="/editkaryawan/{{$mhs-> id}}" class="btn btn-warning">Edit</a>
            <form action="/deletekaryawan/{{$mhs->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
        </div>
    </div>
</div>
@endsection