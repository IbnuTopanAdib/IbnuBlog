
@extends('layouts/main')
@section('container')
    <h1 class="mb-3 ">{{$title}}</h1>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400/?{{$posts[0]->category->nama}}" class="card-img-top" alt="{{$posts[0]->category->nama}}">
            <div class="card-body text-center">
            <a href="/blog/{{$posts[0]->slug}}" class="text-decoration-none text-dark">
                <h5 class="card-title">{{$posts[0]->judul}}</h5>
            </a>
            <p>
                <small class="text-muted">
                    By. <a href="/author/{{$posts[0]->user->username}}">{{$posts[0]->user->name}}</a> in <a href="/categories/{{$posts[0]->category->slug}}" class="text-decoration-none">
                    {{$posts[0]->category->nama}}</a> {{$posts[0]->created_at->diffForHumans()}}
                </small>
            </p>
            <p class="card-text">{{$posts[0]->exceprt}}</p>
            <a href="/blog/{{$posts[0]->slug}}" class=" text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4">
                <div class="card">
                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.5)"><a href="/categories/{{$post->category->slug}}" class="text-white text-decoration-none">{{$post->category->nama}}</a>
                    </div>
                    <img src="https://source.unsplash.com/200x200/?{{$post->category->nama}}" class="card-img-top" alt="{{$post->category->nama}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$post->judul}}</h5>
                      <p>
                        <small class="text-muted">
                            By. <a href="/author/{{$post->user->username}}">{{$post->user->name}}</a> in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">
                            {{$post->category->nama}}</a> {{$post->created_at->diffForHumans()}}
                        </small>
                    </p>
                      <p class="card-text">{{$post->exceprt}}</p>
                      <a href="/blog/{{$post->slug}}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
                </div>
                @endforeach
        </div>
    </div>

@endsection