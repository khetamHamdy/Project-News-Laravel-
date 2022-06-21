@extends('Users_FrontEnd.Layouts.header');
@section('content')
<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- post-container -->
                <div class="post-container">

                    <h2 class="page-heading">Author Name : </h2>
                    <div class="post-content">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="post-img" href="single.php"><img src="image/"
                                        alt="" /></a>
                            </div>
                            <div class="col-md-8">
                                <div class="inner-content clearfix">
                                    <h3><a href='single.php'> </a>
                                    </h3>
                                    <div class="post-information">
                                        <span>
                                            <i class="fa fa-tags" aria-hidden="true"></i>
                                            <a href='#'>
                                            
                                            </a>
                                        </span>
                                        <span>
                                            <i class="fa fa-user" aria-hidden="true"></i>

                                            <a
                                                href='author.php?id=='
                                            >
                                            </a></span>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                           
                                        </span>
                                    </div>
                                    <p class="description">
                                      
                                    </p>
                                    <a class="read-more" href="single.php?id=">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <ul class='pagination'>
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                    </ul>
                </div><!-- /post-container -->
            </div>
            @include('Users_FrontEnd.sidebar')
        </div>
    </div>
</div>
@endsection