<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Femsam</title>

    <link href="{{asset('MDB/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('MDB/css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{asset('MDB/css/style.css')}}" rel="stylesheet">

    <link rel="icon" href="{{asset('MDB/css/favicon.ico ')}}">
</head>
 
<body onload="showPopup(document.getElementById('edit-student-password'))">
         <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top indigo">
            <a class="navbar-brand" href="#">Femsam</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                   
                </ul>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </nav>


        <div class="container-fluid">
            @yield('content')
        </div>

        
        <footer class="page-footer indigo center-on-small-only">
            <div class="footer-copyright">
                <div class="container-fluid">
                    © 2017 Copyright: <a href="#">Femsam.com </a>
                </div>
            </div>
            <!--/.Copyright-->
        </footer>
        <!--/.Footer-->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="{{asset('MDB/js/jquery-3.2.1.min.js')}}"><\/script>')</script>
        <script src="{{asset('MDB/js/popper.min.js')}}"></script>
        <script src="{{asset('MDB/js/bootstrap.min.js')}}"></script>
</body>
</html>
