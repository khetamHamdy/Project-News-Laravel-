@extends('admin.Layouts.header');

@section('content')
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Users</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="{{ route('users.create') }}">add user</a>
              </div>
              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Full Name</th>
                          <th>email </th>
                       
                          <th>Date Account </th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                        @foreach ($user as $users )
                        <tr>
                            <td class='id'>{{ $loop->iteration }}</td>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->email  }}</td>
                            <td>{{ $users->created_at  }}</td>
                            <td class='edit'><a href="{{ route('users.edit' , $users) }}"><i class='fa fa-edit'></i></a></td>
                            <td class='delete'>
                                <form style="background:#004966 " action="{{ route('users.destroy', $users) }}"
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
                         
                        {{ $user->links() }}
                      </tbody>
                  </table>
          
              </div>
          </div>
      </div>
  </div>

  @endsection
