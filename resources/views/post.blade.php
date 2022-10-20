@extends("layouts/main")


@section("container")

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <h2 class="text-center">{{$post->judul}}</h2>
            <p><a href="/author/{{$post->user->username}}" class="text-decoration-none">By. {{$post->user->name}}</a> in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->nama}}</a></p>
            <h5>{{$post->penulis}}</h5>
            <img src="https://source.unsplash.com/1200x400/?{{$post->category->nama}}" class="card-img-top" alt="{{$post->category->nama}}" class="img-fluid">
            <article class="my-3">
                {!!$post->body!!}
            </article>
            <a href="/blog" class="d-block mt-3">back to post</a>
        </div>
    </div>

</div>


@endsection
