<!DOCTYPE html>
<html lang="en">
<head>
    <!--Meta-->
    <meta charset="UTF-8">
    <title>@yield('title', '') - Youma for Canberra</title>
    <meta property="og:site_name" content="Youma for Canberra"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="@yield('title', '') - Youma for Canberra" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="https://cdn.discordapp.com/attachments/333585127143768075/694166038090219580/image0.png"/>
    <meta property="og:url" content="{{\Illuminate\Support\Facades\URL::current()}}"/>
    <meta name="theme-color" content="#e91e63"/>
    <meta name="description" content="@yield('description')">
    <link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/333585127143768075/694166038090219580/image0.png">
    <!--MDBoostrap-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js"></script>
    <!--Jarallax-->
    <script src="https://unpkg.com/jarallax@1/dist/jarallax.min.js"></script>
    <script src="https://unpkg.com/jarallax@1/dist/jarallax-video.min.js"></script>
    <script src="https://unpkg.com/jarallax@1/dist/jarallax-element.min.js"></script>
    <style>
        body {
            overflow-x: hidden;
        }

        .jarallax {
            position: relative;
            z-index: 0;
        }
        .jarallax > .jarallax-img {
            position: absolute;
            object-fit: cover;
            /* support for plugin https://github.com/bfred-it/object-fit-images */
            font-family: 'object-fit: cover;';
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
    </style>
    <!--Specific CSS-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap');

        * {
            font-family: 'Open Sans';
        }

        .navbar, .jarallax {
            text-shadow:0px 1px 1px black;
        }

        .sdp-text {
            color:#e91e63;
        }

        .sdp {
            background-color: #e91e63;
        }

        .btn {
            background-color: #e91e63;
            color: white;
            font-weight: 600;
            text-transform: none;
            font-size: 1em;
            shadow: none;
            border-radius: 5px;
        }

        .manifestoblurb {
            font-size: 1.1em;
            font-weight: 600;
            color: white;
        }
    </style>
</head>
<body>
    @yield('content')
    <div class="container-fluid mdb-color lighten-5 py-4">
        <div class="container flex-center">
            <b><img class="img-fluid" style="height: 30px;" src="{{asset('img/socdemroseblack copy.png')}}" alt=""> &nbsp;Youma for Canberra</b>
        </div>
        <div class="container flex-center">
            <p>This is a publication for /r/AustraliaSim, a reddit political roleplaying community.</p>

        </div>
    </div>
</body>
</html>
