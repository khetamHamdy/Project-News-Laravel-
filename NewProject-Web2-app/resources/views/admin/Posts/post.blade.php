@extends('admin.Layouts.header');

@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1 class="admin-heading">All Posts</h1>
                </div>
                <div class="col-md-2">
                    <a class="add-new" href="{{ route('post.create') }}">add post</a>
                </div>
                <div class="col-md-12">
                    <table class="content-table">
                        <thead>
                            <th>S.No.</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Date</th>

                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td class='id'> {{ $loop->iteration }} </td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->author }}</td>
                                    <td>{{ $post->parent_name }}</td>
                                    <td>{{ $post->created_at }}</td>

                                    <td class='edit'><a href="{{ route('post.edit', $post) }}"><i
                                                class='fa fa-edit'></i></a></td>
                                    <td class='delete'>
                                        <form style="background:#004966 " action="{{ route('post.destroy', $post) }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <br>

                                            <button type="submit" class="btn btn-danger btn-sm" href="">
                                                <i style="color: white" class='fa fa-trash-o'></i>
                                            </button>

                                        </form>
                                    </td>

                                </tr>
                                
                            @endforeach


                            {{ $posts->links() }}
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
  
@endsection
