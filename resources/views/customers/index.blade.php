

@extends('layout/main')

@section('title','Customers')

@section('container')
    
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">List Customers</h1>

            <a href="/customers/create" class="btn btn-primary my-2">Add Customers </a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{session('status') }}
                </div>
                @else @if (session('state'))
                    <div class="alert alert-danger">{{session('state')}}</div>
                @endif
            @endif

            <ul class="list-group">
                @foreach ($customers as $cs)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                      {{$cs->nama}}
                  <a href="/customers/{{$cs->id}}" class="btn btn-primary">Details</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection