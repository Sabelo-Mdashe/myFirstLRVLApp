@extends('layouts.app')

    @section('content')
    <div @class(['d-flex', 'justify-content-end'])>
    </div>
    <h1>Posts</h1>
        @if (count($posts) > 0)
            <ul class="list-group">
                @foreach ($posts as $post)
                    <li class="list-group-item  mb-3 justify-content-between align-items-start list-group-item-info">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">
                            <h3><a style="text-decoration: none;" href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        </div>
                            <small>Written on {{$post->created_at}}</small>
                        </div>
                    </li>
                @endforeach
                {{ $posts->links() }}
            </ul>
            @else
            <p>No posts found</p>       
            
            @endif
        @endsection
