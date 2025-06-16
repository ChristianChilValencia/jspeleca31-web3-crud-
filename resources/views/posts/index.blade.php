@extends('layouts.app')

@section('content')
<h1>All Posts</h1>
@if(session('success')) 
    <div class="success">{{ session('success') }}</div>
@endif
@if(session('error')) 
    <div class="error">{{ session('error') }}</div>
@endif

<a href="{{ route('posts.create') }}" class="button">Create New Post</a>

<ul>
@forelse ($posts as $post)
    <li>
        <strong>{{ $post['title'] }}</strong><br>
        <p>{{ $post['content'] }}</p>
        <div class="actions">
            <a href="{{ route('posts.edit', $post['id']) }}" class="button">Edit</a>
            <form method="POST" action="{{ route('posts.destroy', $post['id']) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    </li>
@empty
    <li>No posts found.</li>
@endforelse
</ul>
@endsection