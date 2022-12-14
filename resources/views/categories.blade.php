
@extends('layouts/main')

@section('container')
    <h1 class="my-3 text-center">All Category</h1>

    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
            <a href="/blog?category={{$category->slug}}">
                <div class="card text-bg-dark">
                    <img src="https://source.unsplash.com/500x500?{{$category->nama}}" class="card-img" alt="{{$category->nama}}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center text-white flex-fill p-4" style="background-color: rgba(0,0,0,0.5) ">{{$category->nama}}</h5>
                    </div>
                </div> 
            </a> 
        </div>
        @endforeach
    </div>





    
    
    @endsection
    