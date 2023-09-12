@extends('layouts.app')

    @section('content')
        <div @class(['mt-5', 'text-center', 'bg-dark', 'p-5'])>
            <h1 style="color: white">Welcome To <span style="color: aqua; font-family: 'Pacifico', cursive;">Bl<span style="color: red">o</span>gz</span></h1>
            <p>Please login or continue as guest if you don't have an account</p>
            <div @class(['d-flex', 'gap-3', 'justify-content-center'])>
                <a href="/login">
                    <button type="button" @class(['btn', 'btn-primary'])>Login</button>
                </a>
                <a href="/posts">
                    <button type="button" @class(['btn', 'btn-success'])>Guest</button>
                </a>
            </div>
        </div>  
    @endsection
<style>
    h1 {
        color: white;
    }

    p {
        color: white
    }
</style>