@extends('Users_FrontEnd.Layouts.header');
@section('content')
<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- post-container -->
                <div class="post-container">

                    <h2 class="page-heading">Search : {{ $serach }}
                    </h2>
                  @foreach ($post_serach as $post )
                  <div class="post-content">
                    <div class="row">
                        <div class="col-md-4">
                            <a class="post-img" href="single.php"><img src="{{ asset('post_images/'.$post->image) }}"
                                    alt="" /></a>
                        </div>
                        <div class="col-md-8">
                            <div class="inner-content clearfix">
                                <h3><a href='single.php'></a>
                                    {{ $post->title }}
                                </h3>
                                <div class="post-information">
                                    <span>
                                        <i class="fa fa-tags" aria-hidden="true"></i>
                                        <a href='#'>
                                          {{ $post->parent_name }}
                                        </a>
                                    </span>
                                    <span>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <a
                                            href='#'>
                                        </a>
                                        {{ $post->author }}
                                    </span>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        {{ $post->created_at }}
                                    </span>
                                </div>
                                <p class="description">
                                    {{ $post->descerption }}
                                </p>
                                <a class="read-more" href="{{ route('single'  , $post->id) }}">read more</a>
                            </div>
                        </div>
                    </div>
                </div>       
                  @endforeach
               
                   
          
             {{ $post_serach->links() }}
                </div><!-- /post-container -->
            </div>
            @include('Users_FrontEnd.sidebar')
        </div>
    </div>
</div>
@endsection