@extends('layouts.app')

    @section('content')
    <a href="/posts" class="btn btn-default btn-light mb-2">Go Back</a>
        <h1>{{ $post->title }}</h1>         
            <div>
            {!! $post->body !!}
        </div>
        <hr>
        <small>Written on {{ $post->created_at }}</small>
        <br>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default btn-light mt-5">Edit</a>
        {{-- <a {{ action('ControllerName', ['id'=>1]) }} class="btn btn-default btn-danger mt-5 ms-2">Delete</a> --}}
    @endsection