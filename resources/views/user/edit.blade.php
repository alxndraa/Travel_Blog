@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">{{ $user->name }}</div>
            <div class="card-body">
            <form autocomplete="off" action="/user/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data" class="needs-validation">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? $user->name }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? $user->email }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') ?? $user->phone }}">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <input class="btn btn-primary card-link" type="submit" value="Submit">
                <a href="{{ url()->previous() }}" class="btn btn-secondary card-link">Cancel</a>
            </form>
        </div>
    </div>
@endsection