
@extends('layouts/main')

@section('container')
    <h1 class="mb-10">All authors</h1>
    @foreach ($posts as $post)
    <article>
        <ul>
            <li><a href="/post/{{$post->user->username}}">{{$post->user->name}}</a></li>
        </ul>
    </article>   
    @endforeach
    
@endsection