@extends('layouts.app')

    @section('content')
        <div @class(['mt-5', 'text-center', 'bg-dark', 'p-5'])>
            <h1 style="color: white">Welcome To <span style="color: aqua; font-family: 'Pacifico', cursive;">Bl<span style="color: red">o</span>gz</span></h1>
            @if (!Auth::guest())
                <p @class(['home_paragraph'])>You can visit your Dashboard to create posts.</p>
                @else
                <p @class(['home_paragraph'])>Please login or continue as guest if you don't have an account</p>
            @endif
            <div @class(['d-flex', 'gap-3', 'justify-content-center'])>
                @if (!Auth::guest())
                    <a href="/home">
                        <button type="button" @class(['btn', 'btn-primary'])>Dashboard</button>
                    </a>
    
                    <a href="/user">
                        <button type="button" @class(['btn', 'btn-success'])>Profile</button>
                    </a>
                    @else
                    <a href="/login">
                        <button type="button" @class(['btn', 'btn-primary'])>Login</button>
                    </a>
                    <a href="/posts">
                        <button type="button" @class(['btn', 'btn-success'])>Guest</button>
                    </a>
                @endif
            </div>
        </div>  
        <div @class(['mt-4'])>
            <h2 @class(['mb-4'])>Latest Post</h2>
            <div class="card">
                <div class="card-body">
                    <h3 style="color: black">{{ $post->title }}</h3>
                    <p @class(['post_paragraph'])>{!! $post->body !!}</p>
                    <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
                </div>
            </div>
            <a href="/posts">
                <button  @class(['mt-3', 'btn', 'btn-default', 'btn-primary'])>View More</button></a>
        </div>
    @endsection
<style>
    h1 {
        color: white;
    }

    .home_paragraph {
        color: white;
    }

    .post_paragraph {
        color: black;
    }

    h2 {
        text-transform: uppercase;
    }
</style>