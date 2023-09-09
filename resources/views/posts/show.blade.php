@extends('layouts.app')

    @section('content')
    <a href="/posts" @class(['btn', 'btn-default', 'btn-light', 'mb-2'])>Go Back</a>
        <h1>{{ $post->title }}</h1>         
        <div>
            {!! $post->body !!}
        </div>
        <hr>
        <small>Written on {{ $post->created_at }}</small>
        <br>
        <div @class(['d-flex', 'gap-3'])>
            <a href="/posts/{{$post->id}}/edit" @class(['btn', 'btn-default', 'btn-light', 'mt-5'])>Edit</a>
            
            {{ html()->form('POST')->open(['action' => 'PostsController@destroy', $post->id]) }}
                @method('DELETE')
                {{ html()->submit('Delete')->class('btn btn-danger mt-5') }}
            {{ html()->form()->close() }}
        </div>
    @endsection