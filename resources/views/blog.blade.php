
@extends('layouts/main')
@section('container')
    <h1 class="mb-3 ">{{$title}}</h1>

    @if ($posts->count())
    <div class="card mb-3">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$posts[0]->judul}}</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif

    

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