@extends('layouts.app')

    @section('content')
        <h1>Edit Post</h1>

        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            <div @class(['form-group', 'mt-5'])>
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" value="{{ $post->title }}">
            </div>
            <div @class(['form-group', 'mt-5'])>
                <label for="body">Body</label>
                <textarea class="form-control" name="body" id="editor" cols="30" rows="10">{{ $post->body }}</textarea>
            </div>
            @method('PATCH')
            @csrf
            <button @class(['btn', 'btn-primary', 'mt-5']) type="submit">Update</button>
            <a href="/posts/{{$post->id}}" @class(['btn', 'btn-default', 'btn-danger', 'mt-5'])>Cancel</a>
        </form>
    @endsection
