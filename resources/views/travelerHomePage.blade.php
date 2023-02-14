<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Page</title>
    <link rel="stylesheet" type="text/css" href="styleTravelerHomePage.css">
</head>
<body>


<div class="container">
    <h2>TRAVELER</h2>
    <div>
        <img src="personNew.png" alt="Profile Picture" class="proPic">
        <h3>
            <?php
            $user = \App\Models\Usernew::find(session()->get('user_id'))->first();
            //$user = \App\Models\User::where('username',$request->get('username'))->first();
            echo ($user->username);
            ?>
        </h3>
    </div>

    You have the following tours available:

    <div>
        <table border="0" class="myTable">
            @foreach($tours as $tour)
                <tr class="trow">
                    <td>
                        <div class="title">
                            {{ $tour->tourTitle }}
                        </div>
                    </td>
                    <td>
                        <form method="post" action="{{route('detailedTour', $tour->id)}}">
                            @csrf
                            <button href="{{route('detailedTour', $tour->id)}}" class="button" type="submit">Detail</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

<!-- Include Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
