@extends('layouts.app')

    @section('content')
        <h1 @class(['mt-5'])>PROFILE</h1>
        <img @class(['mt-5']) src="/storage/admin.png" alt="Admin Avatar" width="20%">
        <h3 class="mt-5">Name: {{ $user->name }}</h3>
        <h3>Email: {{ $user->email }}</h3>
    @endsection