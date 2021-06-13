

@extends('layout/main')

@section('title','Details Customer')

@section('container')
    
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Info Customers</h1>

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$customers->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$customers->telp}}</h6>
                    <p class="card-text">{{$customers->alamat}}</p>
                    <p class="card-text">{{$customers->email}}</p>
                    
                    <a  class="btn btn-primary my-1" href="/customers/{{$customers->id}}/edit">Edit</a>
                    
                    {{-- validasi agar tidak bisa di akses diluar --}}
                    <form action="/customers/{{ $customers->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                    <button type="submit" class="btn btn-danger my-1">Delete</button>
                    </form>
                    <a href="/customers" class="card-link">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection