@extends('layouts.app')

    @section('content')
        <div @class(['mt-5', 'text-center', 'bg-body-secondary', 'p-5'])>
            <h1>{{ $title }}</h1>
            <p>Please Login or Register if you don't have an account already</p>
            <div @class(['d-flex', 'gap-3', 'justify-content-center'])>
                <a href="">
                    <button type="button" @class(['btn', 'btn-primary'])>Login</button>
                </a>
                <a href="">
                    <button type="button" @class(['btn', 'btn-success'])>Register</button>
                </a>
            </div>
        </div>  
    @endsection
