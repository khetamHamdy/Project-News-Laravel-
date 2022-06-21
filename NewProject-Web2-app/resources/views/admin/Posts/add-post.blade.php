@extends('admin.Layouts.header');

@section('content')
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Add New Post</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <!-- Form -->
                <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="post_title">Title</label>
                        <input type="text" name="title" class="form-control" autocomplete="off" value="{{ old('title') }}" >
                    </div>
                    <div class="form-group">
                        <label for="post_title">Author</label>
                        <input type="text" name="author" class="form-control" autocomplete="off" value="{{ old('author') }}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Description</label>
                        <textarea name="Description" class="form-control" rows="5" > {{ old('Description') }} </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category</label>
                        <select name="category" class="form-control">
                               @foreach ($category as $categorys )
                                   <option value="{{ $categorys->id }}">{{ $categorys->NameCategory }} </option>
                               @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Post image</label>
                        <input type="file" name="fileToUpload" value="{{ old('fileToUpload') }}" >
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Save"  />
                </form>
                <!--/Form -->
            </div>
        </div>
    </div>
</div>

@endsection