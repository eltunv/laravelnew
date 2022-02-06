<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('meta_title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="{{ route('index') }}" class="navbar-brand">
            Modamu
        </a>
        <ul class="nav navbar-nav float-end">
            <li class="nav-item"><a href="{{ route('categories.index') }}" class="nav-link">Categories</a></li>
            <li class="nav-item"><a href="{{ route('posts.index') }}" class="nav-link">Posts</a></li>
            <li class="nav-item"><a href="{{ route('websites.index') }}" class="nav-link">Websites</a></li>
        </ul>
    </div>
</header>

@yield('content')

<footer>

</footer>


<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
