@extends('layouts.app')

@section('content')
    @if (!Auth::guest())
        <a href="/home" @class(['btn', 'btn-default', 'btn-light', 'mb-2'])>Go Back</a>
    @else
        <a href="/posts" @class(['btn', 'btn-default', 'btn-light', 'mb-2'])>Go Back</a>
    @endif
    <h1>{{ $post->title }}</h1>
    <div>
        <img src="/storage/images/{{ $post->post_image }}" alt="post image" @class(['w-75'])>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
    <br>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <div @class(['d-flex', 'gap-3'])>
                <a href="/posts/{{ $post->id }}/edit" @class(['btn', 'btn-default', 'btn-light', 'mt-5'])>Edit</a>

                {{ html()->form('POST')->open(['action' => 'PostsController@destroy', $post->id]) }}
                @method('DELETE')
                {{ html()->submit('Delete')->class('btn btn-danger mt-5') }}
                {{ html()->form()->close() }}
            </div>
        @endif
    @endif
@endsection
