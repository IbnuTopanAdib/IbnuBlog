
@extends('layouts/main')
@section('container')
    <h1 class="mb-3 ">{{$title}}</h1>
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
    <h2>
        <a href="/blog/{{$post->slug}}" class="text-decoration-none">{{$post->judul}}</a>
    </h2>
    <p>By. <a href="/author/{{$post->user->username}}">{{$post->user->name}}</a> in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">
        {{$post->category->nama}}</a></p>
    <h5>{{$post->penulis}}</h5>
    <p>{{$post->exceprt}}</p>
    <a href="/blog/{{$post->slug}}">Read more</a>
    </article>   
    @endforeach
    
@endsection