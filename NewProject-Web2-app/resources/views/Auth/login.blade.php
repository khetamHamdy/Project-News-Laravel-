<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/style3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>


<body>

    <!--start Contact-->
    <br> <br> <br>
    <div class="form-container">
        @include('admin.layouts.messages')
        <form action="{{ route('authenticate_login') }}" method="post">
            @csrf
            <h3>Login Now</h3>
            <input type="email" name="email" class="box">

            <input type="password" name="password" class="box">


            <input type="submit" class="btn" name="submit" value="login ">
            <p style="color: white ; Font-size:2rem">Don't have an account? <a href="{{ route('registr') }}"
                    style="color: yellow">Register now</a></p>

        </form>
    </div>
    <!--end Contact-->
</body>

</html>
