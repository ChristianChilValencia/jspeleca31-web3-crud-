@extends('layouts.app')

@section('content')
<h1>Create New Post</h1>

<a href="{{ route('posts.index') }}" class="button" style="background-color: #004d00;">Back to Posts</a>

<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" value="{{ old('title') }}">
    @error('title') <span class="error">{{ $message }}</span> @enderror
    
    <label>Content:</label>
    <textarea name="content">{{ old('content') }}</textarea>
    @error('content') <span class="error">{{ $message }}</span> @enderror
    
    <button type="submit">Create Post</button>
</form>
@endsection