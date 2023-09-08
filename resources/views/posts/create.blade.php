@extends('layouts.app')

    @section('content')
        <h1>Create Post</h1>
        {{ html()->form('POST', '/posts')->open(['action' => 'PostsController@store']) }}
        <div class="form-group">

            {{ html()->label('Title')}}

            {{ html()->text('title', '')->class('form-control')->placeholder('Title') }}
        </div>

        <div class="form-group mt-5">

            {{ html()->label('Body')}}

            {{ html()->textarea('body', '')->id('editor')->class('form-control')->placeholder('Body Text')->rows('7') }}
        </div>

        {{ html()->submit('Submit')->class('btn btn-primary mt-5')}}

        {{ html()->form()->close() }}
    @endsection
