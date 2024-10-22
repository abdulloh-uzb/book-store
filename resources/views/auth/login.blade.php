<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: rgba(0, 0, 0, .1);">
    <div class="d-flex justify-content-center">
        <!-- /resources/views/post/create.blade.php -->
 
 
        <!-- Login -->
        <form class="border p-3 bg-white mt-5" method="POST" action="{{route('login')}}">
            @csrf
            <h1 class="text-center">Login</h1>
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" name="email" >
                <label class="form-label" for="form2Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" name="password">
                <label class="form-label" for="form2Example2">Password</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">

                <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" data-mdb-button-init data-mdb-ripple-init
                    class="btn btn-primary btn-block mb-4">Sign
                    in</button>

                <p>Not a account? <a href="#!">Register</a></p>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">credentials does not match</div>
            @endif
        </form>
        

    </div>
</body>

</html>