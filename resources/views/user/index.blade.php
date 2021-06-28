@extends('layouts/app')

@section('content')
    <div class="container">
        @if(count($users->where('role', 'member')) < 1)
            <p>Not data is available</p>
        @else
            <table class="table table-hover text-center">
                <thead>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </thead>

                <tbody>
                    @foreach($users as $user)
                        @if($user->role == 'admin')
                            @continue
                        @else
                            <tr>
                                <td>{{ $user->name }}</td>
                                <th>{{ $user->email }}</th>
                                
                                <td>
                                    <form action="/user/{{$user->id}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <input type="submit" class="btn btn-outline-danger" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection