@extends('Users_FrontEnd.Layouts.header');
@section('content')
<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- post-container -->
                <div class="post-container">
                    <h2 class="page-heading">Category Name : Sports</h2>
                 
                    @foreach ($Post as $Sport )
                     
                    <div class="post-content">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="post-img" href="single.php"><img src="{{ asset('post_images/'.$Sport->image) }}"
                                        alt="" /></a>
                            </div>
                            <div class="col-md-8">
                                <div class="inner-content clearfix">
                                    <h3>
                                        {{ $Sport->title }}
                                    </h3>
                                    <div class="post-information">
                                        <span>
                                            <i class="fa fa-tags" aria-hidden="true"></i>
                                            <a>
                                                {{ $Sport->parent_name }}
                                            </a>
                                        </span>
                                        <span>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                           
                                            <a
                                                href='author.php?id='></a>   {{ $Sport->author }}</span>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            {{ $Sport->created_at }}
                                        </span>
                                    </div>
                                    <p class="description">
                                        {{ $Sport->descerption }}
                                    </p>
                                    <a class="read-more" href="{{ route('single' , $Sport->id ) }}">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                
                    {{ $Post->links()  }}
                </div><!-- /post-container -->
            </div>
            @include('Users_FrontEnd.sidebar')
        </div>
    </div>
</div>
@endsection