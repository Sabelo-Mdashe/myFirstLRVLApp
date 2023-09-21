@include('layouts.app')

        <div class="container">
            <h1 class="mt-5 mb-3">Update Profile</h1>
            <form action="/update/{{ $user->id }}" method="POST">
                <div class="card p-5" style="width: 20rem;">
                    <div @class(['form-group', ])>
                        <label for="name">Name:</label>
                        <input type="text" name="name" @class(['form-control']) value="{{ $user->name }}">
                    </div>
                    <div @class(['form-group', 'mt-3'])>
                        <label for="email">Email:</label>
                        <input type="email" name="email" @class(['form-control']) value="{{ $user->email }}">
                    </div>
                    @method('PUT')
                    @csrf
                    <div @class(['d-flex', 'gap-3'])>
                        <button @class(['btn', 'btn-default', 'btn-primary', 'mt-5']) type="submit">Update</button>
                        <a href="/user"><button @class(['btn', 'btn-default', 'btn-danger', 'mt-5'])>Cancel</button></a>
                    </div>
                </div>
            </form>
        </div>

<style>
    h1 {
        text-transform: uppercase;
    }
</style>