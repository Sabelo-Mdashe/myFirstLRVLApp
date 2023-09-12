@extends('layouts.app')

    @section('content') 
        <h1>{{ $title }}</h1>
        <p @class(['mt-4', 'text-uppercase'])><b>This is project was developed for learning purposes, it is not a real blog page.</b></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Nisi porta lorem mollis aliquam ut porttitor leo. In nulla posuere sollicitudin aliquam ultrices sagittis orci. A scelerisque purus semper eget. 
            Consectetur adipiscing elit ut aliquam. Gravida cum sociis natoque penatibus. Quis commodo odio aenean sed adipiscing diam donec. 
            Interdum posuere lorem ipsum dolor sit amet. Viverra orci sagittis eu volutpat. Et tortor consequat id porta. Neque sodales ut etiam sit amet. 
            Non pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus. Eros in cursus turpis massa tincidunt. 
            Bibendum enim facilisis gravida neque convallis a cras semper. Ut tristique et egestas quis ipsum suspendisse ultrices. 
            Adipiscing enim eu turpis egestas pretium.</p>

            <div class="mt-5">
                <h5 @class(['text-uppercase', 'text-center'])>Technologies Used:</h5>

                <div @class(['mt-5', /*'d-inline-flex', 'justify-content-around' */])>
                    <img @class(['ms-5']) src="storage\PHP-logo.svg.png" alt="PHP logo" width="20%">
                    <img @class(['ms-5']) src="storage\Laravel-logo.png" alt="Laravel logo" width="30%">
                    <img @class(['ms-5']) src="storage\bootstrap-logo.png" alt="Bootstrap logo" width="30%">
                </div>
            </div>
    @endsection

<style>

    h1, p  {
        text-align: center;
    }

    p {
        text-transform: capitalize;
    }

    img:hover {
        cursor: pointer;
    }
</style>