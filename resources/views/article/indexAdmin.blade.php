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
        <table class="table table-hover text-center">
            <thead>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
            </thead>

            <tbody>
                <tr>
                    @foreach($articles as $user_id => $articleList)
                        @foreach($articleList as $article)
                            <tr>
                                @if($loop->iteration == 1)
                                    <td>{{ $article->users->name }}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{ $article->title }}</td>
                                
                                <td>
                                    <form action="/admin/{{$article->id}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <input type="submit" class="btn btn-outline-danger" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
@endsection