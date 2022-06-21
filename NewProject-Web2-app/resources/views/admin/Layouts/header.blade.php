<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ADMIN Panel</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('../css/bootstrap.min.css') }}" />
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="{{ asset('../css/font-awesome.css') }}">
        <!-- Custom stlylesheet -->
        <link rel="stylesheet" href="{{ asset('../css/style.css') }}">

    </head>
    <body>
        <!-- HEADER -->
        <div id="header-admin">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-2">
                        <a href="post.php"><img class="logo" src="{{ asset('image/news.png') }}">   {{ Auth::user()->name }}</a>
                     
                    </div>
                    <!-- /LOGO -->
                      <!-- LOGO-Out -->
                    <div class="col-md-offset-9  col-md-1">
                        <a href="{{ route('logout') }}" class="admin-logout" >logout</a>
                    </div>
                    <!-- /LOGO-Out -->
                </div>
            </div>
        </div>
        <!-- /HEADER -->
        <!-- Menu Bar -->
        <div id="admin-menubar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <ul class="admin-menu">
                            <li>
                                <a href="{{ route('post.index') }}">Post</a>
                            </li>
                            <li>
                                <a href="{{ route('category.index') }}">Category</a>
                            </li>
                            <li>
                                <a href="{{ route('users.index') }}">Users</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.Layouts.messages')
        <!-- /Menu Bar -->
@yield('content')

        <!-- Footer -->
<div id ="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span>© Copyright 2019 News | Powered by <a href="http://yahoobaba.net/">Yahoo Baba</a></span>
            </div>
        </div>
    </div>
</div>
<!-- /Footer -->