@extends('layouts/app')

@section('style')
    <style>
        .header{
            object-fit: cover;
            width: 100%;
            height: 30em;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center mb-0">{{ $article->title }}</h1>
        <p class="text-center">
            {{ $article->users->name }} &#8226 
            <a href="/category/{{ $article->categories->id }}"><i>{{ $article->categories->name }}</i></a>
        </p>

        <img src="{{ asset('storage/'.$article->image) }}" alt="" class="img-fluid header">

        <p class="mt-4 text-justify">
            {!! nl2br($article->description) !!}
        </p>
    </div>
@endsection