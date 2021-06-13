

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
                    
                    <button type="submit" class="btn btn-primary mx-1">Edit</button>
                    <button type="submit" class="btn btn-danger mx-1">Delete</button>
                    <a href="#" class="card-link">Another link</a>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection