<div id="sidebar" class="col-md-4">
    <!-- search box -->
    <div class="search-box-container">
        <h4>Search</h4>
        <form class="search-post" action="{{ route('search') }}" method="get">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search .....">
                <span class="input-group-btn">
                    <input type="submit" name="submit" value="Search" class="btn btn-danger">
                </span>
            </div>
        </form>

    </div>
    <!-- /search box -->
    <!-- recent posts box -->
    <a href="{{ route('sidebar') }}">
        <div class="recent-post-container">
            <h4>Recent Posts</h4>
            @foreach ($Post as $post)
                <div class="recent-post">
                    <a class="post-img" href="">
                        <img src="{{ asset('post_images/' . $post->image) }}" alt="" />
                    </a>
                    <div class="post-content">
                        <h5><a href="#">{{ $post->title }}</a></h5>
                        <span>
                            <i class="fa fa-tags" aria-hidden="true"></i>
                            <a>{{ $post->parent_name }} </a>
                        </span>
                        <span>
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            {{ $post->author }}
                        </span>
                        <a class="read-more" href="{{ route('single', $post->id) }}">read more</a>
                    </div>
                </div>
            @endforeach


        </div>
    </a>

    <!-- /recent posts box -->
</div>
