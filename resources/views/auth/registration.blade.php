<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: rgba(0, 0, 0, .1);">
    <div class="d-flex justify-content-center">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
            </ul>
        </div>
    @endif

        <form class="border p-3 bg-white mt-5" action="{{route('register')}}" method="POST">
            @csrf
            <h1 class="text-center">Registration</h1>

            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name">
                <label class="form-label" for="name">Name</label>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror


            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" name="username">
                <label class="form-label" for="username">Username</label>
                @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror


            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email">
                <label class="form-label" for="email">Email address</label>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror


            </div>

   
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password">
                <label class="form-label" for="password">Password</label>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror


            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                <label class="form-label" for="password">Password</label>
                @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror


            </div>

            <div class="row mb-4">
                <div class="col">
                    <a href="#!">Forgot password?</a>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

                <p>Do you have account? <a href="{{route('login')}}">Sign in</a></p>
            </div>
        </form>
    </div>
</body>

</html>