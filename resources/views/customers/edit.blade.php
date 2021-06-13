

@extends('layout/main')

@section('title','Edit Data Customer')

@section('container')
    
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Form Edit Customers</h1>

            <form method="POST" action="/customers/{{$customers->id}}">
                
                @method('patch')
                {{-- @method('patch') --}}
                @csrf {{-- Token for secure --}}
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $customers->nama }}">
                  @error('nama') <div class="invalid-feedback">{{ $message}}</div>@enderror
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat Lengkap</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $customers->alamat }}">
                </div>
                <div class="mb-3">
                  <label for="telp" class="form-label @error('telp') is-invalid @enderror">No. Telpon</label>
                  <input type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" class="form-control" id="telp" name="telp" value="{{ $customers->telp }}">
                  @error('telp') <div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Alamat Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{ $customers->email }}">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
              </form>
        </div>
    </div>
</div>

@endsection