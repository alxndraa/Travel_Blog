@extends('layouts/app')

@section('style')
<style>
    .card-img-top{
        object-fit: cover;
        height: 15em;
    }
</style>
@endsection

@section('content')
    <div class="container">
        <h1>{{ $category->name }}</h1>
        
        @if(count($articles) < 1)
            <p>Not data is available</p>
        @else
            <div class="row row-cols-3">
                @foreach($articles as $article)
                    <div class="col mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('storage/'.$article->image) }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a  href="/article/{{ $article->id }}">{{ $article->title }}</a>
                                </h5>

                                <p class="card-text">
                                    {{ Str::words($article->description, 15, ' ...')  }}
                                    <a href="/article/{{ $article->id }}">full story</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection