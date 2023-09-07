@extends('layouts.app')

    @section('content')
        <h1>Create Posts</h1>
        {{ html()->form('POST', '/post')->open(['action' => 'PostsController@store']) }}
        <div class="form-group">

            {{ html()->label('Title')}}

            {{ html()->text('title', '')->class('form-control')->placeholder('Title') }}
        </div>

        <div class="form-group mt-5">

            {{ html()->label('Body')}}

            {{ html()->textarea('body', '')->class('form-control')->placeholder('Body Text') }}
        </div>

        {{ html()->form()->close() }}
    @endsection
