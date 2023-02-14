<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h1>Welcome to<br>Tour Operator System</h1>
    <form action="{{ url('/auth/login') }}" method="post">
        @csrf
        <div id="formtext">
            @if($errors->any())
                <div class="alertDanger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session()->has('msg'))
                <div class="alertSuccess">
                    {{ session()->get('msg') }}
                </div>
            @endif
        </div>
        <label for="username">Email:</label>
        <input type="text" id="email" name="email" required>

        <label for="password" class="pass_label">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Login">
    </form>
    <br>
    Don't have an account? <a href="{{ url('/signup') }}">Sign Up</a>
</div>
</body>
</html>
