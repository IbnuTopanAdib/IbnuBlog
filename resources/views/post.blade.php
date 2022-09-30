@extends("layouts/main")




@section("container")
<article>
    
    <h2>{{$post->judul}}</h2>
    <p>By. Ibnu Topan in <a href="/categories/{{$post->category->slug}}">{{$post->category->nama}}</a></p>
    <h5>{{$post->penulis}}</h5>
    {!!$post->body!!}
</article>
<a href="/blog">back to post</a>
@endsection
