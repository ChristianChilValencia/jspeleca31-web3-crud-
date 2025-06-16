@extends('layouts.app')

@section('content')
<h1>Edit Post</h1>

<a href="{{ route('posts.index') }}" class="button" style="background-color: #004d00;">Back to Posts</a>

<form method="POST" action="{{ route('posts.update', $post['id']) }}">
    @csrf
    @method('PUT')
    
    <label>Title:</label>
    <input type="text" name="title" value="{{ old('title', $post['title']) }}">
    @error('title') <span class="error">{{ $message }}</span> @enderror
    
    <label>Content:</label>
    <textarea name="content">{{ old('content', $post['content']) }}</textarea>
    @error('content') <span class="error">{{ $message }}</span> @enderror
    
    <button type="submit">Update Post</button>
</form>
@endsection