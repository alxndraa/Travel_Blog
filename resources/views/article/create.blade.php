@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Create Article</div>
            <div class="card-body">
                <form autocomplete="off" action="/article" method="POST" enctype="multipart/form-data" class="needs-validation">
                    <!-- csrf to generate hidden token. Laravel session. Laravel safety feature
                    So only us in this session that can do the post
                    Prevent other people from manipulating our data from the outside  !-->
                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                        @error('title') <!-- title is invalid !-->
                            <!-- display the first error message !-->
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" id="category" class="form-control @error('category') is-invalid @enderror">
                            <option selected value="0">Select a category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == old('category') ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="story">Story</label>
                        <textarea name="story" id="story" rows="10" class="form-control @error('story') is-invalid @enderror">{{old('story')}}</textarea>
                        @error('story')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <input class="btn btn-primary card-link" type="submit" value="Submit">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary card-link">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection