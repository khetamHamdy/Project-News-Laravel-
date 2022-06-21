<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>News</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class=" col-md-offset-4 col-md-4">
                    <a class="logo" href="index.php" id="logo">
                        <img src="{{ asset('image/news.png') }}" height="94px">
                    </a>
                </div>
                <!-- /LOGO -->
            </div>
        </div>
    </div>
    <!-- /HEADER -->
    <!-- Menu Bar -->
    <div id="menu-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class='menu'>
                        <li><a href={{ route('business') }}>Business</a></li>
                        <li><a href="{{ route('entertainment') }}">Entertainment</a></li>
                        <li><a href="{{ route('sport') }}">Sports</a></li>
                        <li><a href="{{ route('politics') }}">Politics</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Menu Bar -->
    @yield('content')

    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>© Copyright <?php echo date('Y')?> News | <a href="#">Sondos Abd</a></span>
                </div>
            </div>
        </div>
    </div>
    </body>
    
    </html>