
@extends('layouts/main')
@section('container')
    <h1>ini halaman blog</h1>
    @foreach ($posts as $post)
    <article>
    <h2>
        <a href="/blog/{{$post->id}}">{{$post->judul}}</a>
    </h2>
    <h5>{{$post->penulis}}</h5>
    <p>{{$post->exceprt}}</p>
    </article>   
    @endforeach
    
@endsection