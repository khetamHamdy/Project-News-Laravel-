
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/style3.css') }}" rel="stylesheet">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <br> <br> <br>
    <!--start Contact-->
    <div class="form-container">
       
   
        @include('admin.layouts.messages')
        <form action="{{ route('registrSave') }}" method="post">
            @csrf
            <h3>register now</h3>
                <input type="text" name="name" placeholder="name" required class="box">
            
                <input type="email" name="email" placeholder="email" required class="box" >
         
                <input type="password" placeholder="password" name="password" required class="box">
               
                <input type="password" class="box" placeholder="Retype password" name="password_confirmation" required>
             
           
            <input type="submit" class="btn" name="submit" value="registration">
            <p  style="color: white ; Font-size:2rem">already have an account?<a  style="color: yellow" href="{{ route('login') }}">login now</a></p>
        </form>
    </div>
    <!--end Contact-->
</body>

</html>