<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div class="container">
    <h2>Tour Operator System</h2>
    <h1>Sign up</h1>
    <form action="{{ url('/auth/signup') }}" method="post">
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


        <table border="0">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>UserType</td>
                <td><span><input type="radio" id="traveler" name="usertype" value="traveler">
                    <label for="traveler" class="opt">Traveler</label> &nbsp;&nbsp; <br>
                    <input type="radio" id="travel agency" name="usertype" value="travel agency">
                    <label for="css" class="opt">Travel agency</label></span></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
        </table>
        <input type="submit" value="Sign Up">
    </form>
    <br>
    Already have an account? <a href="{{ url('/login') }}">Log in</a>
</div>
</body>
</html>
