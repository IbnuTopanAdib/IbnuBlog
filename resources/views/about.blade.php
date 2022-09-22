@extends('layouts/main')

@section('container')
    <h1>ini halaman about</h1>
    <h3>halo {{$name}}</h3>
    <h3>Ini alamat email kamu :{{$email}}  </h3>
    <img src="img/{{$image}}" alt="pacar" width="100" height="150" class="img-thumbnail rounded-circle">  
@endsection
