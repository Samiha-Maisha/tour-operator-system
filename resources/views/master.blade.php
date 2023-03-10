<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>{{env('app_name')}}</title>
</head>

<body>

<nav>
    <div class="nav-wrapper">
        <a href="" class="brand-logo">Tour Operator System</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href=" {{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/todo') }}">Todo</a></li>
        </ul>
    </div>
</nav>

@yield('content')

</body>
</html>
