@extends('admin.Layouts.header');

@section('content')
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Categories</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="{{ route('category.create') }}">add category</a>
            </div>
            <div class="col-md-12">
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>Category Name</th>
                      
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                   @foreach ($category as $categorys )
                   <tr>
                    <td class='id'>{{ $loop->iteration }}</td>
                    <td>{{ $categorys->NameCategory }}</td>
                   
                    <td class='edit'><a  href="{{ route('category.edit' , $categorys) }}"><i class='fa fa-edit'></i></a></td>
                  
                    <td class='delete'>           
                        <form  style="background:#004966 " action="{{ route('category.destroy' , $categorys) }}" method="POST">
                            @csrf
                            @method('delete')  
                
                           <button type="submit" class="btn btn-danger btn-sm" href="">
                            <i style="color: white" class='fa fa-trash-o'></i>
                        </button>
                        
                        </form>
                       </td>
                </tr>
                   @endforeach
                           
                  {{ $category->links() }}
                    </tbody>
                </table>
         
            </div>
        </div>
    </div>
</div>

@endsection