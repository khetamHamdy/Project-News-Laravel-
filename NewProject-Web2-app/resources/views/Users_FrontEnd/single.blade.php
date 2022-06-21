@extends('Users_FrontEnd.Layouts.header');
@section('content')
<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- post-container -->
                @foreach ($Post as $post )
                <div class="post-container">
                    <div class="post-content single-post">
                        <h3>{{ $post->title }}</h3>
                        <div class="post-information">
                            <span>
                                <i class="fa fa-tags" aria-hidden="true"></i>
                                {{ $post->parent_name }}
                            </span>
                            <span>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <a
                                    href='author.php?author='>{{ $post->author }}</a>
                            </span>
                            <span>
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                               {{ $post->created_at }}
                            </span>
                        </div>
                        <img class="single-feature-image" src="{{ asset('post_images/'.$post->image) }}" alt="" />
                        <p class="description">
                           {{$post->descerption}}
                        </p>
                    </div>
                </div>   
                @endforeach
            
             
                <!-- /post-container -->
            </div>
           @include('Users_FrontEnd.sidebar')
        </div>
    </div>
</div>
@endsection