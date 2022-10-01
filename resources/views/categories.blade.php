
@extends('layouts/main')

@section('container')
    <h1 class="mb-10">All Category</h1>
    @foreach ($categories as $category)
    <article>
        <ul>
            <li><a href="/categories/{{$category->slug}}">{{$category->nama}}</a></li>
        </ul>
    </article>   
    @endforeach
    
@endsection