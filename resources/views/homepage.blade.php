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
                                <!-- limit thumbnail text to 15 words !-->
                                {{ Str::words($article->description, 15, ' ...')  }}
                                <a href="/article/{{ $article->id }}">full story</a>
                            </p>
                            
                            <small>
                                Category : <a  href="/category/{{ $article->categories->id }}">{{ $article->categories->name }}</a>
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection