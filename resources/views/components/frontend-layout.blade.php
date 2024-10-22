<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body style="background-color: rgba(0, 0, 0, .1);">

    <header class="py-3 bg-white">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <h1>Book Store</h1>
            </div>
            @guest
            <div class="auth">
                <a class="btn btn-success" href="{{route('login')}}">Login</a>
                <a class="btn btn-success" href="{{route('register')}}">Register</a>
            </div>
            @endguest

            @auth
                <form action="{{route('logout')}}" method="POST">   
                    @csrf                 
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            @endauth
        </div>
    </header>

    {{$slot}}
    
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>