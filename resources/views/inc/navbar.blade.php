<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'MY LARAVEL APP')}}</title>
    </head>
    <body class="antialiased">
       <nav class="navbar navbar-expand-lg bg-dark mb-3 p-3" data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand" href="/">BLOGz</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/posts">Blog</a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/posts/create" style="text-decoration: none">Create Post</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </body>
</html>
