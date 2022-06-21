@extends('admin.Layouts.header');

@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="adin-heading"> Update Category</h1>
                </div>
                <div class="col-md-offset-3 col-md-6">

                    <form action="{{ route('category.update' ,$category) }}" method="POST">
                        @csrf
                        @method('put')
                     
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" name="cat_name" class="form-control" value="{{ $category->NameCategory }}"
                                placeholder="" required>
                        </div>
                        <input type="submit" name="submit_update" class="btn btn-primary" value="Update" required />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
