@extends('admin.Layouts.header');
@section('content')
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Update Post</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <!-- Form for show edit-->
                <form action="{{ route('post.update' ,$post) }}" method="POST" enctype="multipart/form-data">
               
                @csrf
                @method('put')

                <div class="form-group">
                    <label for="post_title">Title</label>
                    <input type="text" name="title" class="form-control" autocomplete="off" required value="{{ $post->title  }}">
                </div>
                <div class="form-group">
                    <label for="post_title">Author</label>
                    <input type="text" name="author"  value="{{ $post->author  }}" class="form-control" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> Description</label>
                    <textarea name="Description"  class="form-control" rows="5" required>{{ $post->descerption  }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    <select name="category" class="form-control">
                    

                           @foreach ($category as $categorys )
                               <option  value="{{ $categorys->id  }}" {{ $categorys->id == $post->category_id ?'selected' :''  }}>{{ $categorys->NameCategory }} </option>
                           @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Post image</label>
                    <img  style="width: 5rem ; height:5rem" alt="Avatar"
                    src="{{ asset('post_images/'.$post->image) }}">

                    <input type="file" name="fileToUpload" value="{{ $post->image }}" >
                </div>
              
                    <input type="submit" name="submit" class="btn btn-primary" value="Update" />
                </form>
                <!-- Form End -->
            </div>
        </div>
    </div>
</div>
@endsection