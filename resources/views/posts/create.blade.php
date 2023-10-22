@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        <div @class(['form-group'])>
            <label for="title">Title</label>
            <input type="text" name="title" @class(['form-control']) placeholder="Title">
        </div>

        <div @class(['form-group', 'mt-5'])>
            <label for="body">Body</label>
            <textarea name="body" id="editor" cols="30" rows="10" @class(['form-control'])
                placeholder="Body Text"></textarea>
        </div>

        <div @class(['form-group', 'mt-5'])>
            <label for="post_image">Upload Post Image</label>
            <input type="file" name="post_image" @class(['form-control', 'w-50'])>
        </div>
        @csrf
        <button type="submit" @class(['btn', 'btn-default', 'btn-primary', 'mt-5'])>Create</button>
        <a href="/home" @class(['btn', 'btn-default', 'btn-danger', 'mt-5'])>Cancel</a>
    </form>
@endsection
