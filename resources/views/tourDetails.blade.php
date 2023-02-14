<html>
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="styleTourDetail.css">
    <style>
        body {
            background-color: #9b9696;
            font-family: Arial, sans-serif;
            background-image: url("public/bg.jpg");
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
            width: 500px;
            text-align: center;
        }

        h1 {
            margin-bottom: 5px;
        }

        h2 {
            color: #451115;
        }

        table{
            font-weight: bold;
            padding-bottom: 10px;
            padding-top: 10px;
            width: 100%;
            border-collapse: collapse;
            border: 2px solid black;
        }

        table tr td{
            text-align: left;
        }

        table tr td{
            padding: 5px;
        }


        form {
            display: inline-block;
        }

        label,
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            box-sizing: border-box;
            font-size: 20px;
            font-weight: bold;
        }

        .opt{
            font-weight: normal;
            font-size: 16px;
        }

        input[type="text"],
        input[type="password"] {
            background: #fff;
            max-width: 210px;
            width: 98%;
            padding: 1%;
            float: right;
            height: 25px;

            border: 2px solid lightgray;
            border-radius: 25px;
        }

        .pass_label{
            margin-top: 5px;
        }

        input[type="submit"] {
            background-color: #e98e8e;
            color: white;
            border: none;
            margin-bottom: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #773b3b;
        }


        .alertDanger{
            margin-top: 7px;
            font-weight: bold;
            color: #c32727;
            width: auto;
            max-height: min-content;
            text-align: center
        }

        .alertSuccess{
            margin-top: 7px;
            font-weight: bold;
            color: #2c661b;
            width: auto;
            max-height: min-content;
            text-align: center
        }


        form ul{
            list-style: none;
        }

    </style>
</head>
<body>

<div class="container">
    <h2>Tour Operator System</h2>
    <h1>Tour Details</h1>

    <table border="2px">
        @foreach($tours as $tour)
            @if($tour->id == $sent_id)
                <tr>
                    <td>
                        <b>Tour Tilte:</b>
                    </td>
                    <td>
                        {{ $tour->tourTitle }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Places:</b>
                    </td>
                    <td>
                        {{ $tour->places }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Description:</b>
                    </td>
                    <td>
                        {{ $tour->description }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Start Date:</b>
                    </td>
                    <td>
                        {{ $tour->startDate }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Duration (in days):</b>
                    </td>
                    <td>
                        {{ $tour->durationInDays }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Agency Name:</b>
                    </td>
                    <td>
                        {{ $tour->agencyName }}
                    </td>
                </tr>

            @endif
        @endforeach
    </table>
</body>
</html>
