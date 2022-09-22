@extends("layouts/main")


@section("container")
<article>
    <h2>{{$post->judul}}</h2>
    <h5>{{$post->penulis}}</h5>
    {!!$post->body!!}
</article>
<a href="/blog">back to post</a>
@endsection
