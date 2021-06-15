

@extends('layout/main')

@section('title','About')

@section('container')
    
<div class="container">
    <div class="row">
        <div class="cols-10">
            <h1 class="mt-3">List Customers</h1>

            <table class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No. Telp</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($customers as $cs)
                        
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{$cs->nama}}</td>
                        <td>{{$cs->alamat}}</td>
                        <td>{{$cs->telp}}</td>
                        <td>{{$cs->email}}</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection