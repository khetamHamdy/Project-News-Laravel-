@extends('admin.Layouts.header');

@section('content')
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Add User</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <!-- Form Start -->
                <form action="{{ route('users.store') }}" method="POST" >
                    @csrf
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="fname" value="{{ old('fname') }}" class="form-control" placeholder="First Name" required >
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lname" class="form-control" value="{{ old('lname') }}"  placeholder="Last Name"required >
                    </div>
                
                    <div class="form-group">
                        <label>email</label>
                        <input type="email" name="email" class="form-control"  value="{{ old('email') }}" placeholder="email"required >
                    </div>

                    
                    <div class="form-group">
                        <label>password</label>
                        <input type="password" name="pass" class="form-control"  value="{{ old('pass') }}" placeholder="password" required>
                    </div>
                    <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                </form>
                <!-- Form End-->
            </div>
        </div>
    </div>
</div>
@endsection