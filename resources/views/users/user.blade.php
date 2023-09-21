@extends('layouts.app')

    @section('content')
    <h1 @class(['mt-5 mb-3'])>PROFILE</h1>
    <div class="card" style="width: 18rem;">
        <img src="/storage/admin.png" class="card-img-top" alt="Avatar">
        <div class="card-body">
          <h5 class="card-title">{{ $user->name }}</h5>
          <p class="card-text">{{ $user->email }}</p>
          <a href="/edit" class="btn btn-primary">Edit Profile</a>
        </div>
    </div>
    @endsection