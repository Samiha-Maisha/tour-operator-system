<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="styleTourPost.css">
</head>
<body>
<div class="container">
    <h2>Tour Operator System</h2>
    <h1>Create Tour</h1>
    <form action="{{ url('/tour_posted') }}" method="post">
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
                <td>Tour Title</td>
                <td><input type="text" name="tourTitle"></td>
            </tr>
            <tr>
                <td>Places</td>
                <td><input type="text" name="places"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea id="description" name="description" rows="4" cols="10"></textarea></td>
            </tr>
            <tr>
                <td>Start Date</td>
                <td><input type="date" name="startDate"/></td>
            </tr>
            <tr>
                <td>Duration</td>
                <td><input type="number" name="durationInDays"/></td>
            </tr>
        </table>
        <input type="submit" value="Add Tour">
    </form>
</div>
</body>
</html>
