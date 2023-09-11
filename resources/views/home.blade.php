@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div @class(['d-flex', 'justify-content-end'])>
                        <a href="/posts/create" style="text-decoration: none" @class(['text-end', 'btn', 'btn-default', 'btn-primary'])>Create Post</a>
                    </div>
                    <h3>Your Blog Posts</h3>

                    <table @class(['table', 'table-striped'])>
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td><a href="/posts/{{ $post->id }}/edit">Edit</a></td>
                                <td></td>
                            </tr>
                        @endforeach
                    </table>
                    {{-- {{  }} --}}
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
