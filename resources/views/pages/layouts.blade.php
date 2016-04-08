<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <!-- Latest compiled and minified CSS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            /*display: table;*/
            font-weight: 100;
            font-family: 'roboto';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

            .content {
                text-align: center;
                display: inline-block;
            }

        .title {
            font-size: 28px;
        }
        .table-striped {
            background-color:#EAF2D3 !important;
        }

        table{text-align: center;}
        .navbar{
            background-color: #007c67;
        }
        .navbar-default .navbar-nav>li>a {
            color: #FFF;
        }
    </style>
</head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">CRUD APP</a>
                </div>
                <ul class="nav navbar-nav pull-right">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Manage Clients</a></li>
                    <li><a href="http://crud.app/about"> Add clients</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="main">
                @yield('content')

            </div>
        </div>
    </body>
</html>
