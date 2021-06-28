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
        <a href="/article/create" class="btn btn-primary mb-4">Create Article +</a>

        <table class="table table-hover text-center">
            <thead>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
            </thead>

            <tbody>
                <tr>
                    @foreach($articles as $article)
                        <th scope="row">{{ $article->title }}</th>
                        <td>
                            <form action="/article/{{$article->id}}" method="post">
                                @csrf
                                @method("DELETE")
                                <input type="submit" class="btn btn-outline-danger" value="Delete">
                            </form>
                        </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
@endsection