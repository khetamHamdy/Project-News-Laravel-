@extends('admin.Layouts.header');

@section('content')

  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Modify User Details</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
                  <!-- Form Start -->
                
                  <form  action="{{ route('users.update' , $user) }}" method ="POST">
                    @method('put')
                    @csrf
                   
                          <div class="form-group">
                          <label>full Name</label>
                          <input type="text" name="f_name" class="form-control" value="{{ $user->name }}" placeholder="" required>
                      </div>
                     
                      <div class="form-group">
                          <label>Email</label>
                          <input type="text" name="email" class="form-control" value="{{ $user->email }}" placeholder="" required>
                      </div>  

                      <div class="form-group">
                        <label>password</label>
                        <input type="text" name="pass" value="{{ $dec }}" class="form-control" placeholder="password" required>
                    </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
                  <!-- /Form -->
              </div>
          </div>
      </div>
  </div>
  @endsection
